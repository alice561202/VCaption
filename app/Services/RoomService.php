<?php
namespace App\Services;

use App\Repositories\UserRepository;
use App\Repositories\RoomRepository;
use Illuminate\Http\Request;

class RoomService{

    public function __construct()
    {
    }

    public function findRoomSearch(){
        $roomRepository = new RoomRepository();
        $room = $roomRepository->findRoomSearch();
        return $room;
    }

    public function getAllUserList(){
        $userRepository = new UserRepository();
        $user = $userRepository->getUserList();
        return $user;
    }
    public function createRoom(Request $request){
        $roomRepository = new RoomRepository();
        $room = $roomRepository->createRoom($request);
        return $room;
    }
}
