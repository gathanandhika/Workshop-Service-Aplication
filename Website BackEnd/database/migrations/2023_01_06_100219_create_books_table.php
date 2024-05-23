<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            // $table->integer('id_user');
            $table->string('nama');
            $table->string('jenis_kendaraan');
            $table->string('nomor_kendaraan');
            $table->date('tanggal');
            $table->integer('jml_booking')->nullable();
            $table->string('sparepart')->nullable();
            $table->integer('jumlahbarang')->nullable();
            $table->bigInteger('harga')->nullable();
            $table->bigInteger('total_harga')->nullable();
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
        Schema::dropIfExists('books');
    }
};
