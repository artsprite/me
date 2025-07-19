<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ai_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->string('file_path')->nullable();
            $table->string('file_type')->nullable(); // pdf, doc, txt, etc.
            $table->json('embeddings')->nullable(); // vector embeddings for semantic search
            $table->json('metadata')->nullable(); // additional document metadata
            $table->boolean('is_processed')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_documents');
    }
}; 