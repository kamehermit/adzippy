<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopulationDensitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_densities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('map_block_id')->unsigned();
            $table->decimal('value', 6, 4);
            $table->timestamps();
        });
        Schema::table('population_densities',function($table){
            $table->foreign('map_block_id')->references('id')->on('map_blocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('population_densities');
    }
}
