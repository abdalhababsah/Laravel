<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('AreaID');
            $table->string('Name');



            $table->foreignId('UserID')->constrained('users', 'id')->onDelete('cascade');
 $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
