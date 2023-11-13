<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    public function up()
{
    Schema::create('visits', function (Blueprint $table) {
        $table->id();
        $table->string('external_id')->unique();
        $table->string('stage')->nullable(); // Allow null values
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('visits');
    }
}

