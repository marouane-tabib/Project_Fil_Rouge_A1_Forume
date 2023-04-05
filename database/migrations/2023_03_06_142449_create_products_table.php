<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('primary_color_id');
            $table->foreign('primary_color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->unsignedBigInteger('secondary_color_id');
            $table->foreign('secondary_color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->unsignedBigInteger('home_style_id');
            $table->foreign('home_style_id')->references('id')->on('home_styles')->onDelete('cascade');
            $table->string('image', 150);
            $table->string('title', 55);
            $table->float('width', 6, 2)->nullable();
            $table->float('length', 6, 2)->nullable();
            $table->float('diameter', 6, 2)->nullable();
            $table->text('description', 5000);
            $table->float('price', 11, 2);
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('SKU');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
