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
        Schema::create('usercars', function (Blueprint $table) {
            $table->id();
            $table->string('body_type');
            $table->string('make');
            $table->string('model');
            $table->string('first_registration');
            $table->string('mileage');
            $table->decimal('price');
            $table->string('description');
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
        Schema::dropIfExists('usercars');
    }
};
