<?php

namespace App\Console\Commands;

use App\Services\CustomStubService;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeInterfaceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:interface {name} {--r|repository}';

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

        $this->option('repository') ? $stub = 'interface.repository.stub' : $stub = 'interface.stub';

        $full_path = base_path($namespace) . '\\' . $this->argument('name').'Interface.php';

        $message = CustomStubService::of($this->files, $stub,$this->argument('name'), $namespace,$full_path);

        $this->info($message);
    }
}
