<?php

namespace App\Console\Commands;

use App\Services\CustomStubService;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;

class MakeInterfaceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:interface {name} {--r|repository} {--a|all} {--b|bind}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public Filesystem $files;
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    public function handle()
    {
        $namespace = 'App\\Interfaces';

        $stub = $this->option('repository') || $this->option('all') ? 'interface.repository.stub' : 'interface.stub';

        $fileType = $this->option('repository') || $this->option('all') ? 'RepositoryInterface.php' : 'Interface.php';

        $full_path = base_path($namespace) . '\\' . $this->argument('name').$fileType;

        $message = CustomStubService::of($this->files, $stub, $this->argument('name'), $namespace,$full_path);

        $this->info($message);

        if ($this->option('all')) {
          Artisan::call('make:repository '.$this->argument('name'));
          Artisan::call('make:service '.$this->argument('name').' -r');
          if ($this->option('bind')) {
            Artisan::call("bind:repository ".$this->argument('name')."RepositoryInterface ".$this->argument('name')."Repository");
          }
        }
    }
}
