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
            $table->string('catid');
            $table->string('name');
            $table->longText('description');
            $table->string('buyingPrice');
            $table->string('sellingPrice');
            $table->string('image');
            $table->string('qty');            
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('trending')->default('0');
            $table->tinyInteger('isActive')->default('0');
            $table->string('meta_title');            
            $table->string('meta_keyWord');            
            $table->string('meta_description');           
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
