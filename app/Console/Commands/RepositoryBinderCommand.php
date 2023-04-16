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
    protected $signature = 'bind:repository';

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
         $providerFile = app_path('Providers/RepositoryServiceProvider.php');
         $providerContents = file_get_contents($providerFile);

         // Check if the bindings already exist
         $bindings = [
             BaseRepositoryInterface::class => BaseRepository::class,
             ProductRepositoryInterface::class => ProductRepository::class,
             // Add more bindings here as needed
         ];
         foreach ($bindings as $interface => $implementation) {
             if (strpos($providerContents, "->bind($interface)") !== false) {
                 $this->info("Binding for $interface already exists in RepositoryServiceProvider.");
                 continue;
             }

             // Add the binding to the register() method
             $binding = "\$this->app->bind($interface::class, $implementation::class);";
             $providerContents = preg_replace(
                 '/public function register\(\)\s*{/',
                 "public function register()\n    {\n        $binding\n", // Add the binding after the opening brace
                 $providerContents
             );
             $this->info("Binding for $interface has been added to RepositoryServiceProvider in the register() method.");
         }

         file_put_contents($providerFile, $providerContents);
     }
}
