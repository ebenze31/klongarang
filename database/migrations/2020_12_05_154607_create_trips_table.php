<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('1_day_trip')->nullable();
            $table->string('2_days_trip')->nullable();
            $table->string('3_days_trip')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
            $table->string('photo_3')->nullable();
            $table->string('photo_4')->nullable();
            $table->string('photo_5')->nullable();
            $table->string('photo_6')->nullable();
            $table->string('photo_7')->nullable();
            $table->string('photo_8')->nullable();
            $table->string('photo_9')->nullable();
            $table->string('photo_10')->nullable();
            $table->text('day_1_morning')->nullable();
            $table->text('day_1_noon')->nullable();
            $table->text('day_1_afternoon')->nullable();
            $table->text('day_1_evening')->nullable();
            $table->text('day_1_night')->nullable();
            $table->text('day_2_morning')->nullable();
            $table->text('day_2_noon')->nullable();
            $table->text('day_2_afternoon')->nullable();
            $table->text('day_2_evening')->nullable();
            $table->text('day_2_night')->nullable();
            $table->text('day_3_morning')->nullable();
            $table->text('day_3_noon')->nullable();
            $table->text('day_3_afternoon')->nullable();
            $table->text('day_3_evening')->nullable();
            $table->text('day_3_night')->nullable();
            $table->string('remark')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trips');
    }
}
