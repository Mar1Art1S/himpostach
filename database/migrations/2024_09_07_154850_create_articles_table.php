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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug');
            $table->string('preview_image')->nullable();
            $table->string('detail_image')->nullable();
            $table->text('preview_text');
            $table->text('detail_text');
            $table->json('tags')->nullable();
            $table->foreignId('category_id')->constrained('article_categories');
            $table->dateTime('published_at')->nullable();
            $table->boolean('active')->default(false);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
