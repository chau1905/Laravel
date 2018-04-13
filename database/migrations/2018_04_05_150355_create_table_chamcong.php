<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChamcong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamcong', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nhanvien_id')->unsigned();
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien')->onDelete('cascade');
            $table->integer('songaylam');
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
        Schema::drop('chamcong');
    }
}
