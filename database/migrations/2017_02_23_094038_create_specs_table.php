<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motor_id')->unsigned();
            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('cascade');
            $table->string('tipe_mesin')->nullable();
            $table->string('volume_langkah')->nullable();
            $table->string('sistem_pendingin')->nullable();
            $table->string('sistem_bahan_bakar')->nullable();
            $table->string('diameter_langkah')->nullable();
            $table->string('rasio_kompresi')->nullable();
            $table->string('daya_maksimum')->nullable();
            $table->string('torsi_maksimum')->nullable();
            $table->string('transmisi')->nullable();
            $table->string('pola_gigi')->nullable();
            $table->string('tipe_starter')->nullable();
            $table->string('tipe_kopling')->nullable();
            $table->string('kapasitas_pelumas')->nullable();
            $table->string('kapasitas_bahan_bakar')->nullable();
            $table->string('panjang_lebar_tinggi')->nullable();
            $table->string('jarak_roda')->nullable();
            $table->string('jarak_tanah')->nullable();
            $table->string('curb_weight')->nullable();
            $table->string('tipe_rangka')->nullable();
            $table->string('suspensi_depan')->nullable();
            $table->string('suspensi_belakang')->nullable();
            $table->string('ban_depan')->nullable();
            $table->string('ban_belakang')->nullable();
            $table->string('rem_depan')->nullable();
            $table->string('rem_belakang')->nullable();
            $table->string('aki')->nullable();
            $table->string('tipe_pengapian')->nullable();
            $table->string('tipe_busi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specs');
    }
}
