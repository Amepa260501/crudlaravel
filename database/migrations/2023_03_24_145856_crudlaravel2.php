<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Crudlaravel2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id('id_kategori');
            $table->string('nama_kategori');
            $table->string('descripsi');
        });
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->id('id_kategori');
            $table->string('nama_produk');
            $table->string('harga');
            $table->string('descripsi');
        });
        Schema::create('carts', function (Blueprint $table) {
            $table->id('id_carts');
            $table->id('id_produk');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('carts');
    }
}
