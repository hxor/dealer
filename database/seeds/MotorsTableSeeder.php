<?php

use Illuminate\Database\Seeder;

class MotorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('motors')->truncate();
      DB::table('specs')->truncate();
      $data = [
        'category_id' => 1,
        'gallery_id' => 1,
        'slug' => 'all-new-beat',
        'title' => 'All New BeAT',
        'year' => 2017,
        'desc' => '<div class="tabs vehicle-details-tabs">
                    <div class="tab-content">
                    <div id="vehicle-overview" class="tab-pane fade active in">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                    </div>
                    </div>
                    </div>',
        'price' => 15000000,
        'image' => '/photos/1/Motor/BeAT/all-new-beat.png'
      ];
      
      $spec = [
        'motor_id' => 1,
        //Mesin
        'tipe_mesin' => '4-Langkah, SOHC dengan Pendingin Udara, eSP', 'volume_langkah' => '108,2CC', 'sistem_pendingin' => '', 'sistem_bahan_bakar' => 'Injeksi (PGM-FI)', 'diameter_langkah' => '50 x 55,1 mm',
        'rasio_kompresi' => '9,5 : 1', 'daya_maksimum' => '6,38 kW (8,68 PS) / 7.500 rpm', 'torsi_maksimum' => '9,01 N.m (0,92 kgf.m) / 6500 rpm', 'transmisi' => 'Otomatis, V-Matic', 'pola_gigi' => '', 'tipe_starter' => 'ACG Starter, Pedal & Elektrik', 'tipe_kopling' => 'Otomatis, Sentrifugal, Tipe Kering',
        //Kapasitas
        'kapasitas_pelumas' => '0,7 Liter pada Penggantian Periodik', 'kapasitas_bahan_bakar' => '4,0 Liter (BeAT), 3.7 Liter (BeAT POP)',
        //Dimensi
        'panjang_lebar_tinggi' => '1.856 x 666 x 1.068 mm (BeAT), 1.867 x 678 x 1.074 mm (BeAT POP)', 'jarak_roda' => '1.256 mm', 'jarak_tanah' => '146 mm (BeAT), 140 mm (BeAT POP)', 'curb_weight' => '92 Kg (BeAT), 94 Kg (BeAT POP)', 'tinggi_jok' => '740 mm (BeAT), 735 mm (BeAT POP)',
        //Rangka
        'tipe_rangka' => 'Tulang Punggung', 'suspensi_depan' => 'Teleskopik', 'suspensi_belakang' => 'Lengan Ayun, Shockbreaker Tunggal', 'ban_depan' => '80/90 - 14 M/C 40P - Tubeless', 'ban_belakang' => '90/90 - 14 M/C 46P - Tubeless', 'rem_depan' => 'Cakram Hidrolik, Piston Tunggal', 'rem_belakang' => 'Tromol', 'sistem_pengereman' => 'Combi Break',
        //Kelistrikan
        'aki' => 'Baterai 12V - 3Ah, Tipe MF', 'tipe_pengapian' => 'Full Transisterized, Baterai', 'tipe_busi' => 'NGK MR9C-9N / DENSO U27EPR9-N9'
      ];

      DB::table('motors')->insert($data);
      DB::table('specs')->insert($spec);
    }
}
