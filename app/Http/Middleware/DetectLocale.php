<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class DetectLocale
{
    public function handle($request, Closure $next)
    {
        // Si el usuario ya cambió idioma antes, usar ese
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        } else {
            // Por defecto: inglés (ya no se detecta desde navegador)
            App::setLocale('en');
            session(['locale' => 'en']);
        }

        return $next($request);
    }
}
