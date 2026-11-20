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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('started_date');
            $table->date('end_date');
            $table->float('price');
            $table->enum('status',['waiting','accepted','cancel'])->default('waiting');
            $table->foreignId('user_id')->contrainted('users')->cascadeOnDelete();
            $table->foreignId('field_id')->contrainted('fields')->cascadeOnDelete();
            $table->date('validation_date');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
