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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->string('age');
            $table->string('gender');
            $table->string('phone');
            $table->string('address');
            $table->string('street');
            $table->string('city');
            $table->string('postalCode');
            $table->date('prescriptionDate');
            $table->string('prescription');
            $table->boolean('status')->default(1);   
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
        Schema::dropIfExists('prescriptions');
    }
};
