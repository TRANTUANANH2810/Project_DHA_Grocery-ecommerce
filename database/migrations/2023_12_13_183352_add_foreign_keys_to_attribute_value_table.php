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
        Schema::table('attribute_value', function (Blueprint $table) {
            $table->foreign(['product_id'], 'attribute_value_product_id')->references(['id'])->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['attribute_id'], 'attribute_value_seller_id')->references(['id'])->on('category_attribute')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attribute_value', function (Blueprint $table) {
            $table->dropForeign('attribute_value_product_id');
            $table->dropForeign('attribute_value_seller_id');
        });
    }
};
