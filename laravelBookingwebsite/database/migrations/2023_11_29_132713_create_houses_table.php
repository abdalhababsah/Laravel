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
            $table->string('Type');
            $table->integer('NumberOfRoom');
            $table->integer('NumberOfToilet');
            $table->integer('NumberOfBelcony');
            $table->integer('Rent');
            $table->string('Image')->nullable();
            $table->enum('Status', ['available', 'booked']);
            $table->string('Location');
            $table->foreignId('UserID')->constrained('users', 'id')->onDelete('cascade');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
