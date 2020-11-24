<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RoomService;
use Illuminate\Routing\Controller as BaseController;

class RoomsController extends BaseController{

    public function top(){

        $rooms = new RoomService();
        //ログインしているユーザの参加している部屋を取得
        $room = $rooms->findRoomSearch();
//dump($room);
        //ユーザリストを取得
        $userList = $rooms->getAllUserList();
//dump($userList);
        $viewAssign =[
          'rooms' => $room,
          'users' => $userList
        ];
        return view('Room/top',$viewAssign);
    }

    /**
     * ルーム詳細
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail(){

        return view('Room/detail');
    }

    /**
     * お気に入り登録
     */
    public function favarite(){
        return view('Room/top');
    }

    /**
     * ルーム作成
     */
    public function add(){
        return view('Room/top');
    }

    /**
     *  ルーム削除
     */
    public function delete(){
        return view('Room/top');
    }

    /**
     * ルームソート
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sort(){
        return view('Room/top');
    }

    /**
     * ルーム退出
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logout(){
        return view('Room/top');
    }
}
