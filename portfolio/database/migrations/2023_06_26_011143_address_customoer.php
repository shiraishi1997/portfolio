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
            Schema::create('address_customer', function (Blueprint $table) {
             $table->foreignId('address_id')->constrained('addresses');
             $table->foreignId('customer_id')->constrained('customers');
             $table->primary(['address_id','customer_id']);
                
            });

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
