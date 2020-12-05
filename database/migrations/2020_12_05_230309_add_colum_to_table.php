<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->string('day_1_mo_1')->nullable();
            $table->string('day_1_mo_2')->nullable();
            $table->string('day_1_mo_3')->nullable();
            $table->string('day_1_mo_4')->nullable();

            $table->string('day_1_af_1')->nullable();
            $table->string('day_1_af_2')->nullable();
            $table->string('day_1_af_3')->nullable();
            $table->string('day_1_af_4')->nullable();

            $table->string('day_1_ni_1')->nullable();
            $table->string('day_1_ni_2')->nullable();

            $table->string('day_2_mo_1')->nullable();
            $table->string('day_2_mo_2')->nullable();
            $table->string('day_2_mo_3')->nullable();
            $table->string('day_2_mo_4')->nullable();

            $table->string('day_2_af_1')->nullable();
            $table->string('day_2_af_2')->nullable();
            $table->string('day_2_af_3')->nullable();
            $table->string('day_2_af_4')->nullable();

            $table->string('day_2_ni_1')->nullable();
            $table->string('day_2_ni_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            //
        });
    }
}
