<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaanAirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunaan_air', function (Blueprint $table) {
            $table->id();
            $table->integer('pelanggan_id');
            $table->integer('petugas_meteran_id');
            $table->date('Bulan');
            $table->decimal('Jumlah_air',10,2);
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
        Schema::dropIfExists('_penggunaan_air');
    }
}
