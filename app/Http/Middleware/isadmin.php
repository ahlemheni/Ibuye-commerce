<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Http\Controllers\Redirect;
class isadmin
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
        if(Auth::user()->role=='gerant')
        {
            return redirect()->action('CategorieController@index');
        }
        return $next($request);
    }
}
