<?php

namespace App\Http\Middleware;

use Closure;
use Response; 

class UserVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $flag = $request->user()->verified;
        if(!$flag){
            return Response::json([
                'status' => 'error',
                'status_code' => 401,
                'message' => 'User not verified',
                'data' => ''
            ]);
        }
        return $next($request);
    }
}
