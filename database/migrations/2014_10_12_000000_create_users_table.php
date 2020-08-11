<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id','64')->comment('ID');
            $table->string('user_last_name','16')->comment('名前（姓）');
            $table->string('user_first_name','16')->comment('名前（名）');
            $table->string('user_email','128')->comment('メールアドレス');
            $table->string('password','64')->comment('パスワード');
            $table->string('remember_token','64')->nullable()->default('')->comment('パスワード忘れトークン');
            $table->smallInteger('user_status')->comment('ステータス');
            $table->timestampTz('created_at')->useCurrent()->comment('作成日時');
            $table->string('created_by','64')->comment('作成者');
            $table->timestampTz('updated_at')->useCurrent()->comment('更新日時');
            $table->string('updated_by','64')->comment('更新者');
            $table->softDeletesTz();
            $table->primary(['user_id'], 'primary_customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
