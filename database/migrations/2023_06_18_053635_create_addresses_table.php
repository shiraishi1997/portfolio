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
            $table->string('prefecture',10)->nullable(false);
            $table->string('city',10)->nullable(false);
            $table->string('town',15)->nullable(false);
            $table->string('prefecture_kana',50)->nullable(false);
            $table->string('city_kana',50);
            $table->string('town_kana',50);
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
