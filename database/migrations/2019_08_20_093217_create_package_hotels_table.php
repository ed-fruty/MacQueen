<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('default_image');
            $table->bigInteger('country_id');
            $table->bigInteger('city_id');
            $table->string('address');
            $table->text('description');
            $table->string('long');
            $table->string('lat');
            $table->integer('rate');
            $table->bigInteger('package_id');
            $table->bigInteger('general_package_type_id');
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
        Schema::dropIfExists('package_hotels');
    }
}
