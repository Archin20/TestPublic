<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use App\Product;
class Admin
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
		if (!Auth::user()) {
            return redirect('/home');
        }
        if(Auth::user()->role_id != 1){
		return redirect()->quest('auth/login');
		}
		$products = Product::where('photo',null)->count();
		$request ->merge(compact('products'));
		return $next($request);
    }
}
