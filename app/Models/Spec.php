<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    protected $fillable = [
      'motor_id',
      //Mesin
      'tipe_mesin', 'volume_langkah', 'sistem_pendingin', 'sistem_bahan_bakar', 'diameter_langkah',
      'rasio_kompresi', 'daya_maksimum', 'torsi_maksimum', 'transmisi', 'pola_gigi', 'tipe_starter', 'tipe_kopling',
      //Kapasitas
      'kapasitas_pelumas', 'kapasitas_bahan_bakar',
      //Dimensi
      'panjang_lebar_tinggi', 'jarak_roda', 'jarak_tanah', 'curb_weight',
      //Rangka
      'tipe_rangka', 'suspensi_depan', 'suspensi_belakang', 'ban_depan', 'ban_belakang', 'rem_depan', 'rem_belakang',
      //Kelistrikan
      'aki', 'tipe_pengapian', 'tipe_busi'
    ];
}
