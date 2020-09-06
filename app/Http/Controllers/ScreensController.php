<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ScreensController extends BaseController{

    public function chat(){

        return view('Screen/chat');
    }


}
