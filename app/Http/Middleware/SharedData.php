<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use App\Models\Product;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class SharedData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        View::share('products', Product::all());


        if (Auth::check()) {
            $user_id = Auth::id();
            $total_product = Cart::where('user_id', $user_id)->sum("quantity");
            $total_price = Cart::where('user_id', $user_id)->sum("total_price");;
            view()->share('total_product', $total_product);
            view()->share("total_price", $total_price);
        } else {
            view()->share('total_product', 0);
        }

        return $next($request);
    }
}
