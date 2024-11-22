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
            $table->foreignId('user')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('hotel_id')->constrained('hotels')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('paternal_surname');
            $table->string('maternal_surname');
            $table->date('registration_date');
            $table->integer('number_people');
            $table->integer('room_number');
            $table->date('end_date');
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
