<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('kamar', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nomor');
                $table->string('nama');
                $table->string('tipe');
                $table->string('fasilitas');
                $table->string('user_id');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::drop('kamar');
    }

}
