<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSubtestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bai_test_id')->unsigned();
            $table->string('cau_hoi');
            $table->string('ket_qua');
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
        Schema::dropIfExists('SubTest');
    }
}
