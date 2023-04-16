<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RepositoryBinderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bind:repository {abstract} {concrete}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */

     public function handle()
     {
        $concrete = $this->argument('concrete');
        $abstract = $this->argument('abstract');

        $providerFile = app_path('Providers/RepositoryServiceProvider.php');
        $providerContents = file_get_contents($providerFile);

        if (strpos($providerContents, "->bind($abstract)") !== false) {
            $this->info("Binding for $abstract already exists in RepositoryServiceProvider.");
        }

        $binding = "\$this->app->bind($abstract::class, $concrete::class);";
        $providerContents = preg_replace(
            '/public function register\(\)\s*{/',
            "public function register()\n    {\n      $binding", // Add the binding after the opening brace
            $providerContents
        );

        $this->info("Binding for $abstract has been added to RepositoryServiceProvider in the register() method.");

        file_put_contents($providerFile, $providerContents);
      }
}
