<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('galleries')->truncate();
      DB::table('images')->truncate();
      $gallery = [
        'slug' => 'all-new-beat',
        'title' => 'All New BeAT',
      ];
      DB::table('galleries')->insert($gallery);
      $image = [
        'gallery_id' => 1,
        'title' => 'all-new-beat.png',
        'image' => '/upload/gallery/022017/all-new-beatpng.png'
      ];
      DB::table('images')->insert($image);
    }
}
