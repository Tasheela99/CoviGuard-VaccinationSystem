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
        Schema::create('vaccination_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('vaccination_id')->nullable();
            $table->string('cust_id')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('division')->nullable();
            $table->string('phone')->nullable();
            $table->string('identity')->nullable();
            $table->string('test_result')->nullable();
            $table->string('vaccine_type')->nullable();
            $table->string('date')->nullable();
            $table->string('vaccination_date')->nullable();
            $table->string('center')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('vaccination_appointments');
    }
};
