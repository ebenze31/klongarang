<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('president')->nullable();
            $table->string('president_img')->nullable();
            $table->string('vice_President_1')->nullable();
            $table->string('vice_President_1_img')->nullable();
            $table->string('vice_President_2')->nullable();
            $table->string('vice_President_2_img')->nullable();
            $table->string('secretary_1')->nullable();
            $table->string('secretary_1_img')->nullable();
            $table->string('secretary_2')->nullable();
            $table->string('secretary_2_img')->nullable();
            $table->string('board_by_position_1')->nullable();
            $table->string('board_by_position_1_img')->nullable();
            $table->string('board_by_position_2')->nullable();
            $table->string('board_by_position_2_img')->nullable();
            $table->string('board_by_position_3')->nullable();
            $table->string('board_by_position_3_img')->nullable();
            $table->string('board_by_experts_1')->nullable();
            $table->string('board_by_experts_1_img')->nullable();
            $table->string('board_by_experts_2')->nullable();
            $table->string('board_by_experts_2_img')->nullable();
            $table->string('board_by_experts_3')->nullable();
            $table->string('board_by_experts_3_img')->nullable();
            $table->string('board_by_experts_4')->nullable();
            $table->string('board_by_experts_4_img')->nullable();
            $table->string('board_by_experts_5')->nullable();
            $table->string('board_by_experts_5_img')->nullable();
            $table->string('board_by_experts_6')->nullable();
            $table->string('board_by_experts_6_img')->nullable();
            $table->string('board_by_experts_7')->nullable();
            $table->string('board_by_experts_7_img')->nullable();
            $table->string('board_by_experts_8')->nullable();
            $table->string('board_by_experts_8_img')->nullable();
            $table->string('board_by_experts_9')->nullable();
            $table->string('board_by_experts_9_img')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('communities');
    }
}
