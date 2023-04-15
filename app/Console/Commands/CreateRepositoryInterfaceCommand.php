<?php

namespace App\Console\Commands;

use App\Services\CustomStubService;
use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Filesystem;

class CreateRepositoryInterfaceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:interface {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'With the command can you create repository interface ';

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
        $namespace = 'App\\Traits';

        $full_path = base_path($namespace) . '\\' . $this->argument('name').'Trait.php';

        $message = CustomStubService::of($this->files,'trait.stub',$this->argument('name'),$namespace,$full_path);

        $this->info($message);
    }
}
