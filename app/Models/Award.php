<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'awards';

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
    protected $fillable = ['name', 'detail', 'photo_1', 'photo_2' , 'community_id'];

    public function communitys(){
        return $this->belongsTo('App\Community', 'community_id'); 
    }
}
