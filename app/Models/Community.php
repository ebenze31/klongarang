<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'communities';

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
    protected $fillable = ['name', 'president', 'president_img', 'vice_President_1', 'vice_President_1_img', 'vice_President_2', 'vice_President_2_img', 'secretary_1', 'secretary_1_img', 'secretary_2', 'secretary_2_img', 'board_by_position_1', 'board_by_position_1_img', 'board_by_position_2', 'board_by_position_2_img', 'board_by_position_3', 'board_by_position_3_img', 'board_by_experts_1', 'board_by_experts_1_img', 'board_by_experts_2', 'board_by_experts_2_img', 'board_by_experts_3', 'board_by_experts_3_img', 'board_by_experts_4', 'board_by_experts_4_img', 'board_by_experts_5', 'board_by_experts_5_img', 'board_by_experts_6', 'board_by_experts_6_img', 'board_by_experts_7', 'board_by_experts_7_img', 'board_by_experts_8', 'board_by_experts_8_img', 'board_by_experts_9', 'board_by_experts_9_img'];

    public function awards(){
        return $this->hasMany('App\Awards', 'community_id'); 
    }

    
}
