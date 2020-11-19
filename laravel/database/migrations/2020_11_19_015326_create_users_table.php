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
            $table->bigIncrements('主鍵id');
            $table->tinyInteger('關聯Id')->nullable(); //允許空值
            $table->string('名稱'); //家弟2個值可以指定長度
            $table->boolean('結婚沒');
            $table->date('日期');
            $table->time('時間');
            $table->dateTime('日期+時間');
            $table->integer('預設長度11位的數字');
            $table->timestamps();
            $table->softDeletes(); //軟刪除
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
