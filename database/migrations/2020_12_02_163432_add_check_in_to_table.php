<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCheckInToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travel', function (Blueprint $table) {
            $table->string('agriculture')->nullable();
            $table->string('culture')->nullable();
            $table->string('learn')->nullable();
            $table->string('check_in')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travel', function (Blueprint $table) {
            //
        });
    }
}
