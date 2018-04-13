<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNguyenlieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguyenlieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tennguyenlieu');
            $table->integer('soluong');
            $table->string('donvitinh');
            $table->integer('giatien');
            $table->string('tinhtrang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *     * @return void
     */
    public function down()
    {
        Schema::drop('nguyenlieu');
    }
}
