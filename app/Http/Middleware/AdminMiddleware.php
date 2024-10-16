<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Juries;
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
        // Vérifier si l'utilisateur est connecté
        $user = Auth::user();

        if (!$user) {
            // Rediriger l'utilisateur non authentifié vers une page d'erreur ou une autre action
            return redirect()->route('login');
        }

        // Vérifier si l'utilisateur est un administrateur
        $admin = Juries::where('user_id', $user->id)->first();

        if ($admin) {
            // L'utilisateur est un administrateur, continuer la requête
            return $next($request);

        }
        return redirect()->route('resultat');
        // L'utilisateur n'est pas un administrateur, rediriger vers une autre page

    }
}