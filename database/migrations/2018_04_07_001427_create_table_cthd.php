<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCthd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cthd', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hoadon_id')->unsigned();
            $table->foreign('hoadon_id')->references('id')->on('hoadon')->onDelete('cascade');
            $table->integer('thucdon_id')->unsigned();
            $table->foreign('thucdon_id')->references('id')->on('thucdon')->onDelete('cascade');
            $table->integer('giamgia');
            $table->integer('soluong');
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
        Schema::drop('cthd');
    }
}
