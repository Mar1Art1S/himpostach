<?php

namespace App\Models;

use App\Enums\CategoryEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Validation\Rule;
class Product extends Model
{
    use HasFactory,  HasTranslations;

    public array $translatable = [
      'name',
      'options',
    ];

    protected $fillable = [
        'name',
        'category',
        'options',
        'tds_content',
        'tehcarta_content'
    ];

    protected $casts = [
        'category' => CategoryEnum::class,
        'name' => 'array',
        'options' => 'array',
        'tds_content' => 'array',
        'tehcarta_content' => 'array',
    ];

    public function rules(): array
    {
        return [
            'fio' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'description' => 'nullable|string|max:5000',
            'status' => ['required', Rule::enum(CategoryEnum::class)],
            'product' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'fio.required' => 'Поле "ФИО" є обов’язковим.',
            'contact.required' => 'Поле "Контакт" є обов’язковим.',
            'city.required' => 'Поле "Місто" є обов’язковим.',
            'description.max' => 'Опис не може містити більше ніж 1000 символів.',
        ];
    }


}
