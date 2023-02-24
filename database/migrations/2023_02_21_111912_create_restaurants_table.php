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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('owner_name')->nullable();
            $table->string('owner_email')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('restaurant_name')->nullable();
            $table->string('restaurant_logo')->nullable();
            $table->string('restaurant_address')->nullable();
            $table->string('restaurant_house_number')->nullable();
            $table->string('restaurant_city')->nullable();
            $table->string('restaurant_postal_code')->nullable();
            $table->string('google_reviews_link')->nullable();
            $table->string('menu_link')->nullable();
            $table->string('validation_code')->nullable();
            $table->string('scratch_img')->nullable();
            $table->string('background_img')->nullable();
            $table->string('status')->default(0)->comment('0 = inactive, 1 = active');
            $table->softDeletes();
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
        Schema::dropIfExists('restaurants');
    }
};
