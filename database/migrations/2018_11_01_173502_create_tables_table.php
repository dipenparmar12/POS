<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('table_name')->nullable(true);//For Index if Some Table deleted, after some time created new ones then index sould be start from 1
            $table->integer('order_id')->nullable(true)->unique(); // Hold By ( Which Order_id Hold the table )
            $table->enum('status',['hold','empty','unpaid'])->default('empty');
            //  Hold->order done but full order not served, free, occupaid 
            //  unpaid->order compalte, but unpaid
            //  empty->free ready to use
            // $table->string('status');

            $table->string('remark',190)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
