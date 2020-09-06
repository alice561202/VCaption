<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participation_user', function (Blueprint $table) {
            $table->integer('user_id')->comment('ユーザID');
            $table->integer('room_id')->comment('ルームID');
            $table->smallInteger('active_flg')->default(0)->comment('アクティブフラグ');
            $table->smallInteger('favorite_flg')->default(0)->comment('お気に入りフラグ');
            $table->timestamp('create_at')->comment('作成日');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participation_user');
    }
}
