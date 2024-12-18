<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
  public function up(): void
  {
    Schema::table('products', function (Blueprint $table) {
      // Змінюємо типи колонок
      $table->json('name')->nullable()->change();
      $table->json('options')->nullable()->change();
      $table->json('tds_content')->nullable()->change();
      $table->json('tehcarta_content')->nullable()->change();

      // Видаляємо непотрібні колонки
      $table->dropColumn(['tds_file', 'tex_doc_file', 'tds_title']);
    });
  }

  public function down(): void
  {
    Schema::table('products', function (Blueprint $table) {
      // Відновлюємо стару структуру
      $table->string('name')->change();
      $table->string('tds_file')->nullable();
      $table->string('tex_doc_file')->nullable();
      $table->string('tds_title')->nullable();
      $table->longText('tds_content')->nullable()->change();
      $table->longText('tehcarta_content')->nullable()->change();
    });
  }
}

