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
        Schema::create('mood_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('mood', ['very_happy', 'happy', 'neutral', 'sad', 'very_sad', 'anxious', 'stressed', 'calm', 'excited', 'tired'])->default('neutral');
            $table->integer('mood_level')->default(5)->comment('1-10 scale');
            $table->text('notes')->nullable();
            $table->json('activities')->nullable()->comment('Activities done during the day');
            $table->json('triggers')->nullable()->comment('What triggered this mood');
            $table->boolean('is_private')->default(false);
            $table->timestamps();
            
            $table->index(['user_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mood_logs');
    }
};
