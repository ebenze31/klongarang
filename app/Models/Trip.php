<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trips';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'title', 'one_day_trip', 'two_days_trip', 'three_days_trip', 'cover_photo', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'photo_6', 'photo_7', 'photo_8', 'photo_9', 'photo_10', 'day_1_morning', 'day_1_noon', 'day_1_afternoon', 'day_1_evening', 'day_1_night', 'day_2_morning', 'day_2_noon', 'day_2_afternoon', 'day_2_evening', 'day_2_night', 'day_3_morning', 'day_3_noon', 'day_3_afternoon', 'day_3_evening', 'day_3_night', 'remark'];

    
}
