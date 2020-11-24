<?php
namespace App\Repositories;

use App\Eloquent\User;

class UserRepository
{
    protected $user;

    public function __construct()
    {
        //$this->user = $user;
    }

    /**
     * 名前で1レコードを取得
     *
     * @return object
     */
    public function getUserList()
    {
        $user = new User();
        $user = $user->all();
        return $user;
    }
}
