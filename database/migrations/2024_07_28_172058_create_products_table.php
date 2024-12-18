<?php

use App\Enums\CategoryEnum;
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

      Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->enum('category', array_map(fn($case) => $case->value, CategoryEnum::cases()));
        $table->json('options');
        $table->string('tds_file')->nullable();
        $table->string('tex_doc_file')->nullable();
        $table->string('tds_title')->nullable();
        $table->longText('tds_content')->nullable();
        $table->longText('tehcarta_content')->nullable();

        $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

//Schema::create('products', function (Blueprint $table) {
//  $table->id();
//  $table->timestamps();
//  $table->json('name')->nullable();
//  $table->enum('category', array_map(fn($case) => $case->value, CategoryEnum::cases()));
//  $table->json('options')->nullable();
//  $table->json('tds_content')->nullable();
//  $table->json('tehcarta_content')->nullable();
//
//
//});