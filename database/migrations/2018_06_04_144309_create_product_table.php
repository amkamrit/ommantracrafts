<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('product_category');
            $table->string('product_sub_category');
            $table->string('product_short_description');
            $table->string('product_long_description');
            $table->string('product_code');
            $table->string('product_normal_price');
            $table->string('product_sell_price');
            $table->string('product_minimum_sell_number');
            $table->string('product_type');
            $table->string('slog');
            $table->string('sell_option');
            $table->string('product_image');
            $table->string('product_images');
            $table->string('product_imagess');
            $table->string('product_imagesss');
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
        Schema::dropIfExists('product');
    }
}
