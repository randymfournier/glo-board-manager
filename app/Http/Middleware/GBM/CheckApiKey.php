<?php

namespace App\Http\Middleware\GBM;

use Closure;
use App\User;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check for glo api token

        return $next($request);
    }
}
