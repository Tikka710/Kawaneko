<?php

namespace App\Http\Middleware;

use Closure;
use App\Vote;
use Illuminate\Http\Request;

class CheckIsVoted
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
      $ip_address = Request::ip();
      $request->merge([
        'is_voted' => Vote::where('ip_address', $ip_address)->exists()
      ]);
        return $next($request);
    }
}
