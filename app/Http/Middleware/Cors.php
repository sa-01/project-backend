<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Log;

class Cors
{
    Public function handle($request, Closure $next)
    {
//        Log::info($_SERVER['HTTP_ORIGIN']);
        return $next($request)
            ->header('Access-Control-Allow-Origin', 'http://localhost:8080')
            ->header('Access-Control-Allow-Methods',
                'GET, POST, PUT, PATCH, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers',
                'Content-Type, Authorization, X-Requested-With, X-XSRF-TOKEN');
    }
}
