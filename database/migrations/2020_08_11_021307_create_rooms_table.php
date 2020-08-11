<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->room_id('room_id','64')->comment('ルームID');
            $table->string('room_name','128')->comment('ルーム名');
            $table->timestampTz('created_at')->useCurrent()->comment('作成日時');
            $table->string('created_by','64')->comment('作成者');
            $table->timestampTz('updated_at')->useCurrent()->comment('更新日時');
            $table->string('updated_by','64')->comment('更新者');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roos');
    }
}
