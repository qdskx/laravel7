<?php

namespace App\Http\Middleware;

use Closure;

class UserLogin
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
        var_dump('开始这是中间件组的输出');
        echo 3333;
        echo $request->method();
        echo $request->path();
        var_dump('结束这是中间件的输出');
        return $next($request);
    }
}
