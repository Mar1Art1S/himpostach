<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArticlesTable extends Migration
{
  public function up(): void
  {
    Schema::table('articles', function (Blueprint $table) {
      // Змінюємо типи колонок на JSON
      $table->json('title')->nullable()->change();
      $table->json('slug')->nullable()->change();
      $table->json('preview_text')->nullable()->change();
      $table->json('detail_text')->nullable()->change();
    });
  }

  public function down(): void
  {
    Schema::table('articles', function (Blueprint $table) {
      // Повертаємо назад попередній тип колонок
      $table->string('title')->change();
      $table->string('slug')->change();
      $table->text('preview_text')->change();
      $table->text('detail_text')->change();
    });
  }
}

