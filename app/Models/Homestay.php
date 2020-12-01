<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'homestays';

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
    protected $fillable = ['name', 'home', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'photo_6'];

    
}
