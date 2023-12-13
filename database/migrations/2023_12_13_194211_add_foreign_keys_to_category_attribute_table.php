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
        Schema::table('category_attribute', function (Blueprint $table) {
            $table->foreign(['category_id'], 'category_attribute_category_id')->references(['id'])->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['seller_id'], 'category_attribute_seller_id')->references(['id'])->on('seller')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_attribute', function (Blueprint $table) {
            $table->dropForeign('category_attribute_category_id');
            $table->dropForeign('category_attribute_seller_id');
        });
    }
};
