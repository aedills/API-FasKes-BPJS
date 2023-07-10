<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiKeyAuthentication
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-Key');
        if (!isset($apiKey)) {
            return response()->json(['status' => array('code' => 401, 'message' => 'Please provide API key')], 401);
        }

        $validKey = DB::table('users')->where('k3y', $apiKey)->exists();

        if (!$validKey) {
            return response()->json(['status' => array('code' => 401, 'message' => 'Invalid API key')], 401);
        }
        return $next($request);
    }
}
