<?php

namespace App\Http\Middleware;

use Closure;

class Role
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
      if(auth()->user()->idgroup == 1){
          return $next($request);
      }
      return redirect()->route('home')->with('loi','Bạn không có quyền admin');
    }
}
