<?php

namespace TodoList\Http\Middleware;

use Closure;

class AskMid
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
      if(\Auth::guest() && !$request->is('login')){
        return redirect('/login');
      }
      return $next($request);
    }
}
