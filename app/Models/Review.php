<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reviews';

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
    protected $fillable = ['comment', 'total_score', 'get_score', 'total_user', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'share' ,'name'];

    
}
