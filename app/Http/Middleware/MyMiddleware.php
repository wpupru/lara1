<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // handle - обработчик запроса доступный в переменной $request и функция замыкания  $next!
    public function handle($request, Closure $next) {

        if($request->route('page') != 'pages'){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
