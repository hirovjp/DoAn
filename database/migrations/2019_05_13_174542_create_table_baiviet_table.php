<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBaivietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mon_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->string('tieu_de');
            $table->string('noi_dung', 5000);
            $table->integer('luot_xem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BaiViet');
    }
}
