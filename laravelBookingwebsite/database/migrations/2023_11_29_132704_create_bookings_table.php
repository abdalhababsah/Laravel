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
            $table->string('Address');
            $table->integer('Rent');
            $table->string('Leave');
            $table->string('BookingStatus');

            $table->foreignId('RenterID')->constrained('users', 'id')->onDelete('cascade');
            $table->timestamps();




        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
