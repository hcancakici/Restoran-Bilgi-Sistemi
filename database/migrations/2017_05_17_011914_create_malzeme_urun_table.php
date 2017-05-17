<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMalzemeUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malzeme_urun', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('malzeme_id')->unsigned()->nullable();
            $table->foreign('malzeme_id')->references('id')->on('malzemes')->onDelete('cascade');

            $table->integer('urun_id')->unsigned()->nullable();
            $table->foreign('urun_id')->references('id')->on('uruns')->onDelete('cascade');

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
        Schema::dropIfExists('malzeme_urun');
    }
}
