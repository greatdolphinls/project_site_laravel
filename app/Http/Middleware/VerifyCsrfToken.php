<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Closure;
class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'api/*'
    ];
    public function handle($request, Closure $next)
    {
        if( is_api_request() ){
            return $next($request);
        }
        return parent::handle($request, $next); // TODO: Change the autogenerated stub
    }
}