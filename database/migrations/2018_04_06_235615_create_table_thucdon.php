<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableThucdon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thucdon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenmon');
            $table->integer('loaimon_id')->unsigned();
            $table->foreign('loaimon_id')->references('id')->on('loaimon')->onDelete('cascade');
            $table->integer('dongia');
            $table->string('donvitinh');
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
        Schema::drop('thucdon');
    }
}
