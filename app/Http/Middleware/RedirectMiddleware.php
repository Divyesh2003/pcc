<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


class RedirectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $redirects = DB::table('redirects')->where('source_url', $request->url())->first();
        $currentPath = $request->url();
        if ($redirects != null) {
            return redirect($redirects->destination_url, 301); // 301 for permanent redirect
        }else{
            return $next($request);
        }


    }
}