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
        Schema::create('media_library', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('type', ['audio', 'video', 'document', 'image'])->default('document');
            $table->string('file_path');
            $table->string('file_name');
            $table->string('file_size')->nullable();
            $table->string('mime_type');
            $table->string('duration')->nullable()->comment('For audio/video files');
            $table->json('metadata')->nullable();
            $table->boolean('is_public')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->integer('download_count')->default(0);
            $table->integer('view_count')->default(0);
            $table->foreignId('uploaded_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            
            $table->index(['type', 'is_public']);
            $table->index(['is_featured', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_library');
    }
};
