<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $data = [
          ['slug' => 'matic', 'title' => 'Matic'],
          ['slug' => 'cub', 'title' => 'Cub'],
          ['slug' => 'sport', 'Title' => 'Sport']
        ];
        DB::table('categories')->insert($data);
    }
}
