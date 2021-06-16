<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nik_pembeli');
            $table->string('nama_pembeli');
            $table->text('alamat_pembeli');
            $table->char('jk_pembeli');
            $table->integer('no_pembeli');
            $table->string('motor_id');
            $table->string('transaksi');
            $table->integer('pembayaran');
            $table->integer('uang_muka');
            $table->string('bank');
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
        Schema::dropIfExists('penjualans');
    }
}