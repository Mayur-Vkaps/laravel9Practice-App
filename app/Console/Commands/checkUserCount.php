<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class checkUserCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return the total now  users in the system';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::count() > 0 ? print "There are ".User::count()." registered user(s) in this system. \n" : print "No user is register \n";
    }
}
