<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->integer('country_id');
            $table->string('name', 255);
            $table->string('company', 255);
            $table->string('street_address_1', 255);
            $table->string('street_address_2', 255);
            $table->string('co', 255);
            $table->string('postbox', 255);
            $table->string('postal_code', 255);
            $table->string('locality', 255);
            $table->string('region', 255);
            $table->double('latitude');
            $table->double('longitude');
            $table->string('image', 255);
            $table->string('hashtag', 255)->nullable();
            $table->longText('description')->nullable();
            $table->longText('abstract')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venues');
    }
}
