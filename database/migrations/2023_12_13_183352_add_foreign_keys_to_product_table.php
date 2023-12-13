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
        Schema::table('product', function (Blueprint $table) {
            $table->foreign(['category_id'], 'product_category_id')->references(['id'])->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['seller_id'], 'product_seller_id')->references(['id'])->on('seller')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('product_category_id');
            $table->dropForeign('product_seller_id');
        });
    }
};
