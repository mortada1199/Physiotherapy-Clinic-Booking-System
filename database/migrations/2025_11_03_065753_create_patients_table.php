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
            $table->string('session_name')->nullable();
            $table->string('sessionprice')->nullable();
            $table->string('referingdoctor_name')->nullable();
            $table->string('exectingdoctor_name')->nullable();
            $table->string('persent')->nullable();
            $table->string('name');
            $table->date('date')->nullable();
            $table->string('numbersession')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('dignosis')->nullable();  //تشخيص
            $table->string('roomnumber')->nullable();
            $table->string('importance')->nullable(); //اهمية الحالة
            $table->string('orderby')->nullable(); //طلب بواسطة
            $table->string('resson')->nullable(); //تشخيص السبب
            // $table->string('price')->nullable();
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
