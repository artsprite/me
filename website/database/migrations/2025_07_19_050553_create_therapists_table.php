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
        Schema::create('therapists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('specialization')->nullable();
            $table->text('bio')->nullable();
            $table->string('license_number')->nullable();
            $table->json('certifications')->nullable();
            $table->json('specialties')->nullable();
            $table->decimal('hourly_rate', 8, 2)->nullable();
            $table->json('availability')->nullable()->comment('Weekly availability schedule');
            $table->boolean('is_available')->default(true);
            $table->integer('max_clients')->default(20);
            $table->integer('current_clients')->default(0);
            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('total_sessions')->default(0);
            $table->timestamps();
            
            $table->index(['is_available', 'current_clients']);
            $table->unique('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapists');
    }
};
