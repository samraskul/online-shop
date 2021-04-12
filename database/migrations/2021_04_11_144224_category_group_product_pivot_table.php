<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryGroupProductPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_group_product',function (Blueprint $table) {
            $table->bigInteger('category_group_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();

            $table->foreign('category_group_id')->on('category_groups')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->on('products')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
