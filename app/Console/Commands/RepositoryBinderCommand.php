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

$useStatements = "use $concrete;\nuse $abstract;\r";
// Find the position of the namespace declaration
$namespacePosition = strpos($providerContents, 'namespace App\Providers;');
if ($namespacePosition !== false) {
    // Insert the new use statements after the namespace declaration
    $providerContents = substr_replace($providerContents, "\n$useStatements", $namespacePosition + strlen('namespace App\Providers;'), 0);
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
