<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sku');
            $table->longText('description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('stock_quantity')->default('0');
            $table->double('unit_price',8,2)->nullable();
            $table->double('unit_discount_price',8,2)->nullable();
            $table->double('wholesale_price',8,2)->nullable();
            $table->double('wholesale_discount_price',8,2)->nullable();
            $table->integer('max_wholesale_count')->nullable();
            $table->double('quantity_base_price',8,2)->nullable();
            $table->integer('min_quantity_count')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->enum('stock_status',['in','out'])->default('in');
            $table->enum('type',['simple','variant'])->default('simple');
            $table->integer('variant_root_id')->nullable();
            $table->enum('currency',['USD','KD'])->default('KD');

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
