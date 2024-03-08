<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class removeCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:category {catId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for remove category from category table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   $catId = $this->argument('catId');

        $cat = Category::find($catId);
        if($cat){
            $cat->delete();
            $this->info('Id-'.$catId . ' category deleted successfully.');

        }else{
            $this->info('Id-'.$catId . ' category not found!.');
        }

    }
}
