<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'travel';

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
    protected $fillable = ['category', 'name', 'detail', 'type', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'agriculture', 'culture', 'learn' , 'check_in'];

    
}
