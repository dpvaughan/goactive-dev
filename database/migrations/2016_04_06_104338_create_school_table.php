<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name', 100);
            $table->string('school_address_1', 100);
            $table->string('school_address_2', 100);
            $table->string('school_address_3', 100);
            $table->string('town', 100);
            $table->string('county', 100);
            $table->string('postcode', 10);
            $table->string('image', 100);
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
        Schema::drop('school');
    }
}
