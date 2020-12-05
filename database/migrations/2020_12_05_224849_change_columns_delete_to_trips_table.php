<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsDeleteToTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->dropColumn('three_days_trip');

            $table->dropColumn('day_1_morning');
            $table->dropColumn('day_1_noon');
            $table->dropColumn('day_1_afternoon');
            $table->dropColumn('day_1_evening');
            $table->dropColumn('day_1_night');

            $table->dropColumn('day_2_morning');
            $table->dropColumn('day_2_noon');
            $table->dropColumn('day_2_afternoon');
            $table->dropColumn('day_2_evening');
            $table->dropColumn('day_2_night');

            $table->dropColumn('day_3_morning');
            $table->dropColumn('day_3_noon');
            $table->dropColumn('day_3_afternoon');
            $table->dropColumn('day_3_evening');
            $table->dropColumn('day_3_night');
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
