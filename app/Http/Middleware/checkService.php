<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkService
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->service && $request->service == 'weapons'){  // /services?services=weapons will redirect to defined view
            return redirect('notallowed');
        }
        return $next($request);
    }
}
