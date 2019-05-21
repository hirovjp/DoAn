<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKetquatestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketquatest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bai_test_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->string('ket_qua', 10);
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
        Schema::dropIfExists('KetQuaTest');
    }
}
