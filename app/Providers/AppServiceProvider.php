<?php

namespace App\Providers;

use App\Models\Language;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
      if (Schema::hasTable((new Language())->getTable())) {
        $this->setDefaultLanguage();
        $this->setFallbackLanguage();
        $this->setCarbon();
      }
    }
    private function setDefaultLanguage(): void {
      $language = Language::findDefault();

      $language && app()->setLocale($language->code);
    }
    private function setFallbackLanguage(): void {
      $language = Language::findFallback();

      $language && app()->setFallbackLocale($language->code);
    }
    private function setCarbon(): void {
        Carbon::setLocale(config('app.locale'));
    }



}
