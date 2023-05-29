<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->integer('pelanggan_id');
            $table->integer('id_tarif');
            $table->integer('Id_Kasir');
            $table->integer('Id_admin');
            $table->date('Bulan');
            $table->decimal('Jumlah_tagihan',10,2);
            $table->enum('Status',['Lunas','Belum Lunas']);
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
        Schema::dropIfExists('_tagihan');
    }
}
