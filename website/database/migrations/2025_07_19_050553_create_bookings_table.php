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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('therapist_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed'])->default('pending');
            $table->enum('session_type', ['individual', 'group', 'online', 'in_person'])->default('individual');
            $table->text('notes')->nullable();
            $table->text('therapist_notes')->nullable();
            $table->string('meeting_link')->nullable();
            $table->string('location')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
            
            $table->index(['therapist_id', 'start_time']);
            $table->index(['user_id', 'status']);
            $table->index(['status', 'start_time']);
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
