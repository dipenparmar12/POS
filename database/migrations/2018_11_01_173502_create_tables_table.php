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
            $table->integer('order_id'); // Hold By ( Which Order_id Hold the table )
            $table->enum('status',['hold','empty','unpaid']);
            //  Hold->order done but full order not served, free, occupaid 
            //  unpaid->order compalte, but unpaid
            //  empty->free ready to use
            // $table->string('status');

            $table->string('remark',190)->nullable();
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
        Schema::dropIfExists('tables');
    }
}
