<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->string('name');
            $table->string('seo');
            $table->string('description');
            $table->string('keywords');
            $table->decimal('price');
            $table->decimal('buy_price');
            $table->decimal('sell_price');
            $table->integer('supplier_id');
            $table->integer('category_id ');
            $table->string('categories');
            $table->integer('brand_id');
            $table->integer('model_id');
            $table->string('detail');
            $table->string('image');
            $table->integer('vat');
            $table->integer('stock');
            $table->integer('stock_per_sale');
            $table->integer('stock_unit');
            $table->string('barcode');
            $table->float('width');
            $table->float('height');
            $table->float('depth');
            $table->float('weight');
            $table->float('deci');
            $table->integer('is_discount');
            $table->integer('discount_type');
            $table->integer('discount_value');
            $table->integer('remittance_discount');
            $table->integer('is_new');
            $table->integer('is_vat_included');
            $table->integer('is_sub_product');
            $table->integer('homepage');
            $table->string('warranty_information');
            $table->string('referral_information');
            $table->string('currency');
            $table->string('status');
            $table->integer('order');
            $table->integer('parasut_id');













































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
