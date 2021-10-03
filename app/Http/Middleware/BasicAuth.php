<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $authUser = 'admin';
        $authPass = 'admin';
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        $hasSuppliedCredentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
        $isNotAuthenticated = (
            !$hasSuppliedCredentials ||
            $_SERVER['PHP_AUTH_USER'] != $authUser ||
            $_SERVER['PHP_AUTH_PW']   != $authPass
        );
        if ($isNotAuthenticated) {
            header('HTTP/1.0 401 Unauthorized');
            header('WWW-Authenticate: Basic realm="Access denied"');
            exit('It needs you to log in by using basic authentication to use this API (login: admin, password: admin)');
        }
        return $next($request);
    }
}
