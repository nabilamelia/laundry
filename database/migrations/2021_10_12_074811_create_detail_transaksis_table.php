<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_transaksi')->unsigned();
            $table->integer('id_paket')->unsigned();
            $table->integer('qty');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id')
            ->on('transaksis')->onDelete('cascade');
            $table->foreign('id_paket')->references('id')
            ->on('pakets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksis');
    }
}
