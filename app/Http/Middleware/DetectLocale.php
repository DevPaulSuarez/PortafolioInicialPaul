<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class DetectLocale
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('locale')) {
            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            $locale = in_array($locale, ['en', 'es']) ? $locale : config('app.locale');
            session(['locale' => $locale]);
        }

        App::setLocale(session('locale'));

        return $next($request);
    }
}
