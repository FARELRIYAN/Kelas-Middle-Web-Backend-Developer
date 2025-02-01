<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id(); // Kolom id auto increment
            $table->string('name', 100); // Kolom name dengan varchar max 100
            $table->text('description'); // Kolom description dengan tipe text
            $table->dateTime('release_date'); // Kolom release_date dengan tipe datetime
            $table->string('image'); // Kolom image dengan varchar
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
