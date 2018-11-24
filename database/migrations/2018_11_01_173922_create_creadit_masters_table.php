<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreaditMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creaditMasters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('order_id');
            $table->unsignedDecimal('paid_amout');
            $table->integer('transition_id');
            $table->unsignedDecimal('diff_amount');
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
        Schema::dropIfExists('creaditMasters');
    }
}
