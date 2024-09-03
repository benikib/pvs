<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $admin = Admin::where('user_id', Auth::user()->id)->first();
        if ($admin) {
            // L'utilisateur n'est pas un administrateur, redirigez-le vers une page d'erreur ou une autre action
            return $request->expectsJson() ? null : route('dashboard');
        }

        return $next($request);
    }
}
