<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $locale = request()->cookie('locale', config('app.locale'));
    
        app()->setLocale($locale);
    
        config(['app.fallback_locale' => $locale]);
    
        // تسجيل قيمة الكوكي
        Log::info('Locale from cookie: ' . $locale);
    }
    
    
    
    
}
