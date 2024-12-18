<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $name
 *
 * @property bool $active
 * @property bool $default
 * @property bool $fallback
 */

class Language extends Model
{
    protected $fillable = [
        'id', 'code', 'name',
        
        'active', 'default', 'fallback',
    ];

    protected $casts = [

      'active' => 'boolean',
      'default' => 'boolean',
      'fallback' => 'boolean',
    ];

    public static function findDefault(): self|null
    {
      return self::query()
        ->where('active', true)
        ->where('default', true)
        ->first();
    }
    public static function findFallback(): self|null
    {
      return self::query()
        ->where('active', true)
        ->where('fallback', true)
        ->first();
    }
}
