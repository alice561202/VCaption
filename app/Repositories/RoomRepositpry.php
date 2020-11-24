<?php
namespace App\Repositories;

use App\Eloquent\Room;

class RoomRepository
{
    protected $room;

    public function __construct()
    {

    }

    /**
     * レコードを取得
     * @return object
     */
    public function findRoomSearch()
    {
        $room = new Room();
        $room = $room->all();
        return $room;
    }
}
