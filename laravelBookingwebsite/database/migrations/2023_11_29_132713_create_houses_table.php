<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id('HouseID');
            $table->string('Address');
            $table->string('Contact');
            $table->integer('NumberOfRoom');
            $table->integer('NumberOfToilet');
            $table->integer('NumberOfBelcony');
            $table->integer('Rent');
            $table->string('Image')->nullable();
            $table->string('Status');
            $table->foreignId('AreaID')->constrained('areas', 'AreaID')->onDelete('cascade');
            $table->foreignId('BookingID')->constrained('bookings', 'BookingID')->onDelete('cascade');
            $table->foreignId('UserID')->constrained('users', 'id')->onDelete('cascade');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
