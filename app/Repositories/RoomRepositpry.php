<?php
namespace App\Repositories;

use App\Eloquent\ParticipationUser;
use App\Eloquent\Room;
use Illuminate\Http\Request;

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
        $room = $room->all()->toArray();
        return $room;
    }
    /**
     * チャットルーム作成
     */
    public function createRoom(Request $request)
    {
        $room = new Room();
        $pUser = new ParticipationUser();

        foreach($request['selectMember'] as $key => $users){
            $user = ['user_id' => $users,'room_id'=>1 ,"active_flg" => 1, "favorite_flg" => 1];
            $pUser->insert($user);
        }
        $room_name = ($request['createRoomName']) ?$request['createRoomName'] :'';
        $room_record =['room_id' => 2, 'creater_name' => $room_name,'creater_id'=> 1 ,'room_img' =>''];
        $room->insert($room_record);
        return $room;
    }
}
