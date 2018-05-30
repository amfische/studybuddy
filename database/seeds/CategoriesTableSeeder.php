<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'JavaScript',
        	'color' => '#4763a4'
        ]);

        Category::create([
        	'name' => 'CSS',
        	'color' => '#eb4a3a'
        ]);

        Category::create([
        	'name' => 'HTML 5',
        	'color' => '#2da725'
        ]);

        Category::create([
        	'name' => 'Networking',
        	'color' => '#14c3b0'
        ]);

        Category::create([
        	'name' => 'Security',
        	'color' => '#a8911a'
        ]);
    }
}
