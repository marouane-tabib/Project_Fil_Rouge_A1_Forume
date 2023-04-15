<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      return $this->info($this->argument('name'));
    }
}
