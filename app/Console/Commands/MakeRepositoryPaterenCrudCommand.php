<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MakeRepositoryPaterenCrudCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository-crud {name}';

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
      Artisan::call('make:model '.$this->argument('name').' -mfscr');
      Artisan::call('make:request-switch '.$this->argument('name'));
      Artisan::call('make:interface '.$this->argument('name').' -a -b');
    }
}
