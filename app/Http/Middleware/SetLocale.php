<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // On récupère le paramètre 'locale' de l'URL
        $locale = $request->route('locale');

        if (in_array($locale, ['en', 'fr'])) {
            // On définit la langue de l'application
            App::setLocale($locale);
        }

        // On force Laravel à conserver ce paramètre dans tous les liens générés par route()
        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}
