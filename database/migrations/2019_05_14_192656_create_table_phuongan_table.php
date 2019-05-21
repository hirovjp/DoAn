<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhuonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuongan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subtest_id')->unsigned();
            $table->string('cac_phuong_an', 5000);
            $table->timestamps();

            $table->foreign('subtest_id')->references('id')->on('subtest')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuongan');
    }
}
