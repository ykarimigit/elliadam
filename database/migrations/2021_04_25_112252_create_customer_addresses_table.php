<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('country');
            $table->string('city');
            $table->string('district');
            $table->string('neigborhood');
            $table->string('address');
            $table->string('name');
            $table->string('surname');
            $table->string('title');
            $table->integer(' 	invoice_type ');
            $table->string('citizenship_number');
            $table->string('zip_code');
            $table->string('mobile_phone');
            $table->string('home_phone');
            $table->string('other_phone');
            $table->string('company_name');
            $table->string('tax_number ');
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
        Schema::dropIfExists('customer_addresses');
    }
}
