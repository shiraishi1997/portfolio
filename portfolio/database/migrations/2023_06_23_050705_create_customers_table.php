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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->char('name',20)->nullable(false);
            $table->integer('postcode')->nullable(false);
            $table->char('prefecture',10)->nullable(false);
            $table->char('city',10)->nullable(false);
            $table->char('town',15)->nullable(false);
            $table->char('street',50)->nullable(false);
            $table->char('blocl',50)->nullable();
            $table->string('telephone',15)->nullable(false);
            $table->date('birthday')->nullable(false);
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
        Schema::dropIfExists('customers');
    }
};
