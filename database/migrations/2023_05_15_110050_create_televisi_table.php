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
        Schema::create('televisi', function (Blueprint $table) {
           // $table->id();
            $table->timestamps();
            $table->string('produk_tv');
            $table->string('asal_tv');
            $table->string('harga_tv');
            $table->string('ukuran_tv');
            $table->string('kualitas_tv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('televisi');
    }
};
