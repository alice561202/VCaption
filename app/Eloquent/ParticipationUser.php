<?php

namespace app\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
/**
 * Class Room
 * @package app\Eloquent
 * @mixin \Eloquent
 */
class ParticipationUser extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','room__id','active_flg','favorite_flg'
    ];

}

