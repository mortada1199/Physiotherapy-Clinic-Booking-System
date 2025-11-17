<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('referingdoctor_name')->nullable();
            $table->string('name');
            $table->string('dignosis')->nullable();  //تشخيص
            $table->string('session_name')->nullable();
            $table->string('totalsession')->nullable();
            $table->string('excutedsession')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('exectingdoctor_name')->nullable();
            $table->string('numbersession')->nullable();
            $table->string('roomnumber')->nullable();
            $table->string('sessionprice')->nullable();
            $table->string('persent')->nullable();
            $table->string('major')->nullable();
            $table->string('type')->nullable();
            $table->string('age')->nullable();
            $table->string('patientnumber')->nullable();
            $table->string('doctorfate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
