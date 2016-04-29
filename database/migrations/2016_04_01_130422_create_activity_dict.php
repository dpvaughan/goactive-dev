<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityDict extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_dict', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activity', 100);
            $table->string('activity_short_description', 300);
            $table->string('activity_long_description', 2000);
            $table->integer('status');
            $table->integer('is_current');
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
        Schema::drop('activity_dict');
    }
}
