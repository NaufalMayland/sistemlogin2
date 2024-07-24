<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        if ($role == 'siswa' && $user->siswa) {
            return $next($request);
        } elseif ($role == 'guru' && $user->guru) {
            return $next($request);
        } elseif ($role == 'admin' && $user->admin) {
            return $next($request);
        }

        return redirect('/');
    }
}
