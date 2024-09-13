<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'active'
    ];
    protected $casts = [
        'active' => 'boolean'
    ];
    public function rules(): array
{
    return [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'active' => 'required|boolean',
    ];
}
}
