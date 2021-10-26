<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_outlet')->unsigned();
            $table->string('kode_invoice');
            $table->integer('id_member')->unsigned();
            $table->date('tgl');
            $table->date('batas_waktu')->nullable();
            $table->date('tgl_bayar');
            $table->integer('biaya_tambahan')->nullable();
            $table->integer('diskon')->nullable();
            $table->integer('pajak')->nullable();
            $table->enum('status', ['baru', 'proses', 'selesai', 'diambil',])->default('baru');
            $table->enum('dibayar', ['dibayar', 'belum_bayar']);
            $table->timestamps();

            $table->foreign('id_outlet')->references('id')
                ->on('outlets')->onDelete('cascade');
            $table->foreign('id_member')->references('id')
                ->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
