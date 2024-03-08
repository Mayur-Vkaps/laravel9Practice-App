<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;



class enterName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'say:Hello {name:Name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to say hello to name enter and prompt if name is not enter';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Hello ' . $this->argument('name'));
        return 0;
    }




}
