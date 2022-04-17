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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name')->nullable();
            $table->string('sender_email')->unique()->nullable();
            $table->string('sender_num')->nullable();
            $table->string('sender_city')->nullable();
            $table->string('sender_country')->nullable();

            $table->string('reciever_name')->nullable();
            $table->string('reciever_email')->unique()->nullable();
            $table->string('reciever_num')->nullable();
            $table->string('reciever_house_num')->nullable();
            $table->mediumText('reciever_address')->nullable();
            $table->string('reciever_city')->nullable();
            $table->string('reciever_country')->nullable();

            $table->string('shipment_title')->nullable();
            $table->string('shipment_method')->nullable();
            $table->string('shipment_category')->nullable();
            $table->string('shipment_product_name')->nullable();
            $table->string('shipment_weight')->nullable();
            $table->string('shipment_weight_unit')->nullable();
            $table->string('shipment_total')->nullable();
            $table->mediumText('shipment_desc')->nullable();

            $table->string('location_departure')->nullable();
            $table->date('location_d_date')->nullable();
            $table->time('location_d_time')->nullable();
            $table->string('location_pickup')->nullable();
            $table->date('location_p_date')->nullable();
            $table->time('location_p_time')->nullable();
            
            $table->string('tracking_id')->unique()->nullable();
            $table->enum('status',['active','pending'])->default('pending');

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
        Schema::dropIfExists('shippings');
    }
};
