<?php
namespace App\Http\Middleware;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            config(['app.fallback_locale' => session('locale')]);
            Log::info('Fallback Locale set in Middleware: ' . config('app.fallback_locale'));
        }
    
        return $next($request);
    }
}
