<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nhanvien_id')->unsigned();
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien')->onDelete('cascade');
            $table->time('ngaylap');
            $table->integer('ban_id')->unsigned();
            $table->foreign('ban_id')->references('id')->on('ban')->onDelete('cascade');
            $table->integer('giatien');
            $table->integer('tongtien');
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
        Schema::drop('hoadon');
    }
}
