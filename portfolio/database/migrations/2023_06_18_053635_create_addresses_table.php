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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->char('postcode',7)->nullable(false);
            $table->char('prefecture',10)->nullable(false);
            $table->char('city',10)->nullable(false);
            $table->char('town',15)->nullable(false);
            $table->char('prefecture_kana',50)->nullable(false);
            $table->char('city_kana',50);
            $table->char('town_kana',50);
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
        Schema::dropIfExists('addresses');
    }
};
