<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name', 255);
            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->boolean('is_active')->default(true);
            $table->bigInteger('admin_id')->nullable()->unsigned();
            $table->float('price')->nullable();
            $table->integer('discount')->nullable();
            $table->Text('short_description')->nullable();
            $table->MediumText('long_description')->nullable();
            $table->MediumText('specification')->nullable();
            $table->boolean('is_available')->default(true);
            $table->bigInteger('views')->default(0);
            $table->integer('stock')->default(0);
            $table->float('rate')->default(0);
            $table->string('produce_date', 255)->nullable();
            $table->string('brand', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('color', 255)->nullable();
            $table->string('size', 255)->nullable();
            $table->string('material', 255)->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
