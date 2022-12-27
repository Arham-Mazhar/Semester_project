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
        Schema::create('booktrips', function (Blueprint $table) {
            $table->id();
            $table->string('Flight');
            $table->string('Departure_Country');
            $table->string('Arrive_Country');
            $table->string('Anything1');
            $table->string('Anything2');
            $table->String('Kids');
            $table->String('Adults');
            $table->String('Seniors');
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
        Schema::dropIfExists('booktrips');
    }
};
