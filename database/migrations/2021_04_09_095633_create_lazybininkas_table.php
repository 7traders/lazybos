<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLazybininkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lazybininkas', function (Blueprint $table) {
            $table->id();

            $table->string('name', 64);
            $table->string('surname', 64);
            $table->integer('bet');
            $table->unsignedBigInteger('arklys_id');
            $table->foreign('arklys_id')->references('id')->on('arklys');

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
        Schema::dropIfExists('lazybininkas');
    }
}
