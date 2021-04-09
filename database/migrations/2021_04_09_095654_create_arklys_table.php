<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArklysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arklys', function (Blueprint $table) {
            $table->id();

            $table->string('name', 64);
            $table->integer('wins');
            $table->integer('runs');
            $table->text('about');
            $table->unsignedBigInteger('arklys_id');
            $table->foreign('lazybininkas_id')->references('id')->on('lazybininkas');

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
        Schema::dropIfExists('arklys');
    }
}
