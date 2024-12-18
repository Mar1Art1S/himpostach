<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
  use HasFactory, HasSEO, HasTranslations;


  public function getDynamicSEOData(): SEOData
  {
    $pathToFeaturedImageRelativeToPublicPath = $this->detail_image;

    // Override only the properties you want:
    return new SEOData(
      title: $this->title,
      description: $this->preview_text,
      image: $pathToFeaturedImageRelativeToPublicPath,
    );
  }

  public array $translatable = [
    'title',
    'slug',
    'preview_text',
    'detail_text',
  ];
  protected $fillable = [
    'title',
    'slug',
    'preview_text',
    'detail_text',
    'preview_image',
    'detail_image',
    'tags',
    'category_id',
    'published_at',
    'active',
  ];
  protected $casts = [
    'tags' => 'json',
    'published_at' => 'datetime',
    'active' => 'boolean',
    'title' => 'array',
    'slug' => 'array',
    'preview_text'=> 'array',
    'detail_text'=> 'array',
  ];

  public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
    return $this->belongsTo(ArticleCategory::class);
  }

  public function getFormattedPublishedAtAttribute(): string
  {
    return Carbon::parse($this->published_at)->translatedFormat('j F Y');
  }


  public function rules(): array
  {
    return [
      'title' => 'required|string|max:255',
      'slug' => 'required|string|max:255',
      'preview_text' => 'nullable|string',
      'detail_text' => 'nullable|string',
      'preview_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      'detail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      'tags' => 'nullable|array',
      'tags.*' => 'string',
      'category_id' => 'required|exists:categories,id',
      'published_at' => 'nullable|date',
      'active' => 'required|boolean',
    ];
  }

}
