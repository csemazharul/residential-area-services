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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('bookings')->onDelete('cascade');
            $table->mediumText('tran_id')->nullable();
            $table->float('amount')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact')->nullable();
            $table->mediumText('address')->nullable();
            $table->date('service_date')->nullable();
            $table->string('service_time')->nullable();
            $table->string('card_type')->nullable();
            $table->string('payment_status')->nullable();
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
        Schema::dropIfExists('booking_details');
    }
};
