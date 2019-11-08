<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class BeforeSetDefaultLocaleForUrls
{
    public function handle($request, Closure $next)
    {
        URL::defaults(['locale' => $request->segment(1)]);
	app()->setLocale($request->segment(1));
        return $next($request);
    }
}
