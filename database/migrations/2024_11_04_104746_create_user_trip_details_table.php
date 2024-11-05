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
        Schema::create('user_trip_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('adult');
            $table->integer('child')->nullable();
            $table->decimal('budget', 10, 2);
            $table->json('category_id')->nullable();
            $table->json('hotel_id')->nullable();
            $table->json('place_id')->nullable();
            $table->foreignId('car_rental_id')->nullable()->constrained('car_rentals')->onDelete('set null');
            $table->dateTime('outside_datetime_start')->nullable();
            $table->dateTime('outside_datetime_end')->nullable();
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
        Schema::dropIfExists('user_trip_details');
    }
};
