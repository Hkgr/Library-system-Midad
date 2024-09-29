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
        Log::info('Current App Locale: ' . config('app.locale'));

        if (session()->has('locale')) {
            config(['app.fallback_locale' => session('locale')]);
            Log::info('Fallback Locale set: ' . config('app.fallback_locale'));
        } else {
            config(['app.fallback_locale' => config('app.fallback_locale')]);
            Log::info('Using default Fallback Locale: ' . config('app.fallback_locale'));
        }
    }
}
