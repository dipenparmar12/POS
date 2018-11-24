<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id')->nullable(true);
            $table->integer('table_id')->nullable(true);;
            // $table->enum('status');// pending for letter
            $table->enum('status',['hold','empty','unpaid','aborted']); // Table->order_status
            $table->string('paid',50)->nullable(true); //['true','false'] Credite(Account)For Regualer Customers (true if FullAmout paid )
            $table->unsignedDecimal('amount')->nullable(true);;
            $table->unsignedDecimal('discount_percent')->nullable(true)->default('0');
            $table->boolean('bill_printed')->nullable(true);;
            $table->string('type',30)->nullable(true);; // Home_Delivery, Walkin, Onsite
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
        Schema::dropIfExists('orders');
    }
}
