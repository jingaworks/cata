<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Magneti frigider',
            'slug' => 'magneti-frigider',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est sequi, a maiores corporis itaque tempore numquam praesentium commodi quam quibusdam rem fugit mollitia repellendus aut.',
        ]);
    }
}
