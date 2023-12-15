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
        Schema::create('product', function (Blueprint $table) {
            $table->comment('Product');
            $table->integer('id', true)->comment('Primary Key');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Create At');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated At');
            $table->integer('category_id')->nullable()->index('product_category_id');
            $table->integer('seller_id')->nullable()->index('product_seller_id');
            $table->string('sku')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->float('price', 10, 0)->nullable();
            $table->float('price_old', 10, 0)->nullable();
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->integer('qty')->nullable();
            $table->text('image')->nullable();
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
};
