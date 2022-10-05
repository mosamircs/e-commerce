<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug")->unique();
            $table->integer("price")->nullable();
            $table->string("image_path")->nullable();
            $table->string("thumb_path")->nullable();
            $table->string("weight")->nullable();
            $table->string("sku")->nullable();
            $table->string("location")->nullable();
            $table->string("description")->nullable();
            $table->foreignId("order_id")->references("id")->on("orders")->cascadeOnDelete();
            $table->foreignId('category_id')->references("id")->on('categories')->cascadeOnDelete();
            $table->foreignId('box_id')->references("id")->on('boxes')->cascadeOnDelete();
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
};
