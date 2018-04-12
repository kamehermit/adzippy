<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrafficDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('map_block_id')->unsigned();
            $table->integer('time');
            $table->decimal('value', 6, 4);
            $table->timestamps();
        });
        Schema::table('traffic_datas',function($table){
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
        Schema::dropIfExists('traffic_datas');
    }
}
