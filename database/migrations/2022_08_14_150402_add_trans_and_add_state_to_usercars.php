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
        Schema::table('usercars', function (Blueprint $table) {
            $table->string('state_of_wear')->after('price');
            $table->string('transmission')->after('state_of_wear');
            $table->string('fuel')->after('transmission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usercars', function (Blueprint $table) {
            $table->dropColumn('state_of_wear');
            $table->dropColumn('transmission');
            $table->dropColumn('fuel');
        });
    }
};
