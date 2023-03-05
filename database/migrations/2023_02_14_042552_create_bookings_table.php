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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('flight_id');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone_one');
            $table->string('phone_two');
            $table->string('city');
            $table->string('country');
            $table->integer('passenger_qty');
            $table->string('booking_code');
            $table->string('total_price');
            $table->integer('status')->default(0); // 0 -> pending 1 -> accept 2 -> cancel
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
        Schema::dropIfExists('bookings');
    }
};
