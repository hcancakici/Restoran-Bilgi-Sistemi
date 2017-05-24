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
        Schema::create('siparis_urun', function (Blueprint $table) {

            $table->integer('siparis_id')->unsigned()->nullable();
            $table->foreign('siparis_id')->references('id')->on('siparis')->onDelete('cascade');

            $table->integer('urun_id')->unsigned()->nullable();
            $table->foreign('urun_id')->references('id')->on('uruns')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siparis_urun');
    }
}
