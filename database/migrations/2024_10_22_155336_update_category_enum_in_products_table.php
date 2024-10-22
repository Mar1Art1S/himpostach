<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoryEnumInProductsTable extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Оновлення поля category
            $table->dropColumn('category'); // Спочатку видалимо старе поле
            $table->enum('category', array_map(fn($case) => $case->value, CategoryEnum::cases()))->after('name'); // Додамо нове поле
        });
    }


}

