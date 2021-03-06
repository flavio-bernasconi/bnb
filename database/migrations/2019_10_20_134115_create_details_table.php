<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('flat_id')->unsigned();
            $table->foreign('flat_id')->references('id')->on('flats')->unique()->unsigned();

            $table->tinyInteger('num_room');
            $table->tinyInteger('bed');
            $table->tinyInteger('bathroom');
            $table->smallInteger('mq');
            $table->string('img');
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
        Schema::dropIfExists('details');
    }
}
