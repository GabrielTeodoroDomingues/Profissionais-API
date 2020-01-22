<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfissionaisTec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionais-tec', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profissionais_id');
            $table->foreign('profissionais_id')->references('id')->on('profissionais');
            $table->foreign('tec_id')->references('id')->on('tec');
            $table->unsignedBigInteger('tec_id');
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
        Schema::dropIfExists('profissionais-tec');
    }
}
