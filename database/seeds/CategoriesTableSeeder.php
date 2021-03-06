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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('categories')->truncate();
        $data = [
          ['slug' => 'matic', 'title' => 'Matic'],
          ['slug' => 'cub', 'title' => 'Cub'],
          ['slug' => 'sport', 'title' => 'Sport']
        ];
        DB::table('categories')->insert($data);
    }
}
