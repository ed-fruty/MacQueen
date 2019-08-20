<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSafraCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safra_cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('country_id');
            $table->string('name');
            $table->string('expedia_id')->nullable();
            $table->double('lat', 8, 2);
            $table->double('long', 8, 2);
            $table->integer('region_id')->nullable();
            $table->timestamps();
           // $table->primary('id');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('safra_cities');
    }
}
