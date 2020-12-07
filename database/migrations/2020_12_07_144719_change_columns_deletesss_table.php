<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsDeletesssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('communities', function (Blueprint $table) {
            $table->dropColumn('board_by_position_1_img');
            $table->dropColumn('board_by_position_2_img');
            $table->dropColumn('board_by_position_3_img');

            $table->dropColumn('board_by_experts_1_img');
            $table->dropColumn('board_by_experts_2_img');
            $table->dropColumn('board_by_experts_3_img');
            $table->dropColumn('board_by_experts_4_img');
            $table->dropColumn('board_by_experts_5_img');
            $table->dropColumn('board_by_experts_6_img');
            $table->dropColumn('board_by_experts_7_img');
            $table->dropColumn('board_by_experts_8_img');
            $table->dropColumn('board_by_experts_9_img'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('communities', function (Blueprint $table) {
            //
        });
    }
}
