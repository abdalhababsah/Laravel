<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('ReviewID');
            $table->text('Opinion');
            $table->integer('Rate');
            $table->foreignId('UserID')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('HouseID')->constrained('houses', 'HouseID')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
