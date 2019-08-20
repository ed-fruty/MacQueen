<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSafraHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safra_hotels', function (Blueprint $table) {
          //  $table->bigIncrements('id');
            $table->uuid('id');
            $table->string('expedia_id',191)->nullable();
            $table->integer('city_id',11)->nullable();
            $table->tinyInteger('active');   
            $table->timestamps();
           $table->primary('id');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('safra_hotels');
    }
}
