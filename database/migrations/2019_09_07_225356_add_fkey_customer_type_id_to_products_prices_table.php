<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkeyCustomerTypeIdToProductsPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_prices', function (Blueprint $table) {
            $table->bigInteger('customer_type_id')->unsigned();
            $table->foreign('customer_type_id')->references('id')->on('customer_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_prices', function (Blueprint $table) {
            $table->dropColumn('customer_type_id');
        });
    }
}
