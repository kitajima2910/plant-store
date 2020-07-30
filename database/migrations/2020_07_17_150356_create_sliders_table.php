<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('feature_image_path')->nullable();
            $table->string('feature_image_name')->nullable();
            $table->text('content');
            $table->tinyInteger('status')->define(1);
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
        Schema::dropIfExists('sliders');
    }
}
