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
            $table->string('name')->index();
            $table->integer('price')->index();
            $table->string('feature_image'); // Demo: https://via.placeholder.com/150 có size 150x150
            $table->text('content');
            $table->integer('user_id');
            $table->integer('category_id')->index();
            $table->softDeletes()->index();
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
        Schema::dropIfExists('products');
    }
}
