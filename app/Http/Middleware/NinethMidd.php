<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NinethMidd
{
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('locale')) {
            App()->setlocale(session()->get('locale'));
        }
        return $next($request);
    }
}