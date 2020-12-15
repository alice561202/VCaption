<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ScreensController extends BaseController{

    public function chat(Request $request){

        //チャット一覧取得
        $user = $request->user();
        $others = \App\User::where('id', '!=', $user->id)->pluck('name', 'id');
        return view('video_chat.index')->with([
            'user' => collect($request->user()->only(['id', 'name'])),
            'others' => $others
        ]);

        return view('screen/chat');
    }
    // Pusherの認証
    public function auth(Request $request){

        $user = $request->user();
        $socket_id = $request->socket_id;
        $channel_name = $request->channel_name;
        $pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            [
                'cluster' => config('broadcasting.connections.pusher.options.cluster'),
                'encrypted' => true
            ]
        );
        return response(
            $pusher->presence_auth($channel_name, $socket_id, $user->id)
        );
    }

    /**
     * チャット
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createMessage(Request $request){

        dump($request);

        //登録
        return redirect('screen/chat');
    }
}
