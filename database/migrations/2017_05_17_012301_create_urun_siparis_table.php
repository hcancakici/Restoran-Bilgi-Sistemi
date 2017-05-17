<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunSiparisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_siparis', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('urun_id')->unsigned()->nullable();
            $table->foreign('urun_id')->references('id')->on('uruns')->onDelete('cascade');

            $table->integer('siparis_id')->unsigned()->nullable();
            $table->foreign('siparis_id')->references('id')->on('siparis')->onDelete('cascade');

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
        Schema::dropIfExists('urun_siparis');
    }
}
