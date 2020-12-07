<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToExpandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('communities', function (Blueprint $table) {
            $table->string('expand_1')->nullable();
            $table->string('expand_2')->nullable();
            $table->string('expand_3')->nullable();
            $table->string('expand_4')->nullable();

            $table->string('rule_1')->nullable();
            $table->string('rule_2')->nullable();
            $table->string('rule_3')->nullable();
            $table->string('rule_4')->nullable();

            $table->string('protection_1')->nullable();
            $table->string('protection_2')->nullable();
            $table->string('protection_3')->nullable();
            $table->string('protection_4')->nullable();
            $table->string('protection_5')->nullable();

            $table->string('finance_1')->nullable();
            $table->string('finance_2')->nullable();
            $table->string('finance_3')->nullable();
            $table->string('finance_4')->nullable();

            $table->string('public_health_1')->nullable();
            $table->string('public_health_2')->nullable();
            $table->string('public_health_3')->nullable();
            $table->string('public_health_4')->nullable();

            $table->string('welfare_1')->nullable();
            $table->string('welfare_2')->nullable();
            $table->string('welfare_3')->nullable();
            $table->string('welfare_4')->nullable();
            $table->string('welfare_5')->nullable();

            $table->string('education_1')->nullable();
            $table->string('education_2')->nullable();
            $table->string('education_3')->nullable();
            $table->string('education_4')->nullable();
            $table->string('education_5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('communitys', function (Blueprint $table) {
            //
        });
    }
}
