<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('airline_id');
            $table->string('price');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->dateTime('return_date')->nullable(true);
            $table->string('class');
            $table->string('type');
            $table->string('duration');
            $table->string('image')->nullable(true);
            $table->string('from');
            $table->string('to');
            $table->string('departure_airport');
            $table->string('arrival_airport');
            $table->dateTime('boarding_time');
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
        Schema::dropIfExists('flights');
    }
};
