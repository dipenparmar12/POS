<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name',50);
            $table->string('m_name',50);
            $table->string('l_name',50);
            $table->integer('mobile');
            $table->integer('mobile1');
            $table->text('address');
            $table->string('city',50);
            $table->integer('pin_code');
            $table->decimal('credit_limit');
            $table->text('remark');
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
        Schema::dropIfExists('customers');
    }
}
