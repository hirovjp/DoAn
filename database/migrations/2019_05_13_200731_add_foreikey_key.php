<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeikeyKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('phan_quyen_id')->references('id')->on('phanquyen')->onDelete('cascade');
        });

        Schema::table('mon', function (Blueprint $table) {
            $table->foreign('nganh_id')->references('id')->on('nganh')->onDelete('cascade');
        });

        Schema::table('binhluan', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bai_viet_id')->references('id')->on('baiviet');
            $table->foreign('bai_test_id')->references('id')->on('baitest');
        });

        Schema::table('ketquatest', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bai_test_id')->references('id')->on('baitest');
        });

        Schema::table('baiviet', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mon_id')->references('id')->on('mon');
        });

        Schema::table('file', function (Blueprint $table) {
            $table->foreign('bai_viet_id')->references('id')->on('baiviet')->onDelete('cascade');
        });

        Schema::table('BaiTest', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mon_id')->references('id')->on('mon');
        });

        Schema::table('subtest', function (Blueprint $table) {
            $table->foreign('bai_test_id')->references('id')->on('baitest')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('mon', function (Blueprint $table) {
            $table->dropForeign(['nganh_id']);
        });

        Schema::table('binhluan', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['bai_viet_id']);
            $table->dropForeign(['bai_test_id']);
        });

        Schema::table('ketquatest', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['bai_test_id']);
        });

        Schema::table('baiviet', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['mon_id']);
        });

        Schema::table('file', function (Blueprint $table) {
            $table->dropForeign(['bai_viet_id']);
        });

        Schema::table('BaiTest', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['mon_id']);
        });

        Schema::table('subtest', function (Blueprint $table) {
            $table->dropForeign(['bai_test_id']);
        });*/
    }
}
