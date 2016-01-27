<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengunjungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('pengunjung', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('alamat');
                $table->string('umur');
                $table->string('jenis_kelamin');
                $table->string('jenis_kamar');
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
            Schema::drop('tasks');
        }

}
