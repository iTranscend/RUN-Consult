<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsActiveAndDeletedColumnToCustomerTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_type', function (Blueprint $table) {
            $table->boolean('deleted')->default(false);
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_type', function (Blueprint $table) {
            $table->dropColumn('deleted');
            $table->dropColumn('is_active');
        });
    }
}
