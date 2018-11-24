<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('sub_categories', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });

        Schema::create('subCategories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name',100);
            $table->string('nick_name',100);
            $table->text('desc',190)->nullable();
            $table->text('img',190)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::rename('subcategories','subCategories');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subCategories');
    }
}
