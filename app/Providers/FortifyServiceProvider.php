<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Requests\LoginRequest as LoginVlidator;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::loginView(function () {
          return view('admin.auth.login');
        });

        RateLimiter::for('login', function (Request $request) {
            $validator = $request->validate([
              'email' => ['required', 'string', 'email', 'min:4', 'max:150', 'exists:users,email'],
              'password' => ['required', 'string', 'min:8', 'max:150'],
              'remember' => ['nullable', 'boolean'],
            ],  [
              'email.required' => 'Please enter your email address.',
              'email.string' => 'Your email address must be a string.',
              'email.email' => 'Please enter a valid email address.',
              'email.min' => 'Your email address must be at least 4 characters long.',
              'email.max' => 'Your email address must not exceed 150 characters.',
              'email.exists' => 'The email you entered is not registered',
              'password.required' => 'Please enter your password.',
              'password.string' => 'Your password must be a string.',
              'password.min' => 'Your password must be at least 8 characters long.',
              'password.max' => 'Your password must not exceed 150 characters.',
              'remember.boolean' => 'The remember field must be either true or false.',
          ]);

            $email = (string) $validator['email'];

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
