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
        // Vérifier si l'utilisateur est connecté
        $user = Auth::user();
        
        if (!$user) {
            // Rediriger l'utilisateur non authentifié vers une page d'erreur ou une autre action
            return redirect()->route('login');
        }
    
        // Vérifier si l'utilisateur est un administrateur
        $admin = Admin::where('user_id', $user->id)->first();
    
        if ($admin) {
            // L'utilisateur est un administrateur, continuer la requête
            return $next($request);
        }
    
        // L'utilisateur n'est pas un administrateur, rediriger vers une autre page
        return redirect()->route('users.pvs', ['id' => $user->id]);
    }
}    
