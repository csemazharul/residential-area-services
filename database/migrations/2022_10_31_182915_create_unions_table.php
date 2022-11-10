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
        Schema::create('unions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('bn_name')->nullable();
            $table->string('url',50)->nullable();
            $table->foreignId('upazilla_id')->constrained('upazilas')->onDelete('cascade');
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
        Schema::dropIfExists('unions');
    }
};
