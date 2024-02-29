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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name');
            $table->string('email');
            $table->string('phone');
            $table->string('child_name');
            $table->integer('age');
            $table->integer('classlevel');
            $table->string('time_schedule');
            $table->string('subject');
            $table->text('lesson_needs');;
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
