<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id');
            $table->integer('order_id');
            $table->integer('table_id');
            // $table->unsignedInteger('item_qty')->nullable(true); // pizza 2qty,20rs = 40rs || dosha 10qty 3rs = 30rs
            $table->string('remark',190)->nullable(true);
            $table->boolean('aborted')->default(0);
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
        Schema::dropIfExists('orderDetails');
    }
}
