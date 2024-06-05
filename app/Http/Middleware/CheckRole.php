<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if the authenticated user has one of the required roles
        if ($request->user() && in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // If the user does not have the required role, redirect or show error
        return redirect('/home')->with('error', 'You do not have access to this page');
    }
}
