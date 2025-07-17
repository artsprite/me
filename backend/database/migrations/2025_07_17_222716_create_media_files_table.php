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
        Schema::create('media_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('original_name');
            $table->string('file_name');
            $table->string('file_path', 500);
            $table->enum('file_type', ['image', 'video', 'audio', 'document']);
            $table->bigInteger('file_size');
            $table->string('mime_type', 100);
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->json('tags')->nullable();
            $table->string('folder')->default('general');
            $table->boolean('is_public')->default(false);
            $table->timestamps();
            
            $table->index('user_id');
            $table->index('file_type');
            $table->index('folder');
            $table->index('is_public');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_files');
    }
};
