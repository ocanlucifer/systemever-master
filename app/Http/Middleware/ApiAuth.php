<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;

class ApiAuth
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        $header = $request->header();

        $session_token = $request->token;        

        if (!empty($header['authorization'][0]) || !empty($session_token)) {
            $token = substr($header['authorization'][0], 7);
            if (!empty($session_token)) {
                $token = $session_token;
            }
            $user_token = \App\UserToken::where('jwt_token' , $token)->first();
            if (!empty($user_token)) {
                $user = \App\User::find($user_token->user_id);
                $request->user = $user;
                return $next($request);
            } else {
                return plainjson([
                    'code'      => 401,
                    'message'   => 'Unauthorized',
                    'data'      => [
                        "type"      => url("problem/problem-with-message"),
                        "title"     => "Unauthorized",
                        "status"    => 401,
                        "detail"    => "Full authentication is required to access this resource",
                        "path"      => "/api/user-entities/detail",
                        "message"   => "error.http.401"
                    ]
                ]);
            }
        } else {
            return plainjson([
                'code'      => 401,
                'message'   => 'Unauthorized',
                'data'      => [
                    "type"      => url("problem/problem-with-message"),
                    "title"     => "Unauthorized",
                    "status"    => 401,
                    "detail"    => "Full authentication is required to access this resource",
                    "path"      => "/api/user-entities/detail",
                    "message"   => "error.http.401"
                ]
            ]);
        }

        if ($this->auth->guard($guard)->guest()) {
            return plainjson([
                'code'      => 401,
                'message'   => 'Unauthorized',
                'data'      => [
                    "type"      => url("problem/problem-with-message"),
                    "title"     => "Unauthorized",
                    "status"    => 401,
                    "detail"    => "Full authentication is required to access this resource",
                    "path"      => "/api/user-entities/detail",
                    "message"   => "error.http.401"
                ]
            ]);
        }
    }
}
