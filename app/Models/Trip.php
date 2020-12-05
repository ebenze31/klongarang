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
    protected $fillable = ['name', 'title', 'one_day_trip', 'two_days_trip', 'cover_photo', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'photo_6', 'photo_7', 'photo_8', 'photo_9', 'photo_10', 'day_1_mo_1', 'day_1_mo_2', 'day_1_mo_3', 'day_1_mo_4','day_1_af_1', 'day_1_af_2', 'day_1_af_3', 'day_1_af_4' ,'day_1_ni_1', 'day_1_ni_2', 'day_2_mo_1', 'day_2_mo_2','day_2_mo_3', 'day_2_mo_4', 'day_2_af_1', 'day_2_af_2', 'day_2_af_3', 'day_2_af_4', 'day_2_ni_1' , 'day_2_ni_2', 'remark'];

    
}
