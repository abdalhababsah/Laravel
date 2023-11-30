<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('BookingID');
            $table->integer('BookingStatus');
            $table->date('ArravingTime');
            $table->date('LeavingTime');
            $table->foreignId('RenterID')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('HouseID')->constrained('houses', 'HouseID')->onDelete('cascade');

            $table->timestamps();




        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
