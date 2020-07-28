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
        $this->down();

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('feature_image_path')->nullable(); // Demo: https://via.placeholder.com/150 có size 150x150
            $table->string('feature_image_name')->nullable();
            $table->bigInteger('price');
            $table->integer('sale_price')->nullable();
            $table->bigInteger('final_price');
            $table->mediumText('content_short');
            $table->text('content');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->tinyInteger('status')->define(1);
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
