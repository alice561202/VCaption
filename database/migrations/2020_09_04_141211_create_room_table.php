<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->integer('room_id')->comment('ルームID');
            $table->string('creater_name',50)->comment('ルーム名');
            $table->integer('creater_id')->default(0)->comment('作成者ID');
            $table->string('room_img',100)->comment('ALT画像');
            $table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日');
            $table->timestamp('update_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新日');
            $table->primary('room_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room');
    }
}
