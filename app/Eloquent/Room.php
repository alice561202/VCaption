<?php

namespace app\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
/**
 * Class Room
 * @package app\Eloquent
 * @mixin \Eloquent
 */
class Room extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_id', 'creater_name','creater_id' ,'room_img',
    ];

}
