<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // apa yang harus dilakukan akun yang dilakukan akun yang lagi login bukan admin
        if (Auth::user()->role_id != 1) {
            return redirect('ruangan');
        }

        //apa yang harus dilakukan kalu akun yang login adalah admin

        return $next($request);
    }
}
