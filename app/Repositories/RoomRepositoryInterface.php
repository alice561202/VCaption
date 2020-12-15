<?php
namespace App\Repositories\Room;

interface RoomRepositoryInterface
{
    /**
     * Nameで1レコードを取得
     *
     * @var string $name
     * @return object
     */
    public function createRoom($name);
}
