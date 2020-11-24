<?php
namespace App\Repositories\User;

interface UserRepositoryInterface
{
    /**
     * Nameで1レコードを取得
     *
     * @return object
     */
    public function getUserList();
}
