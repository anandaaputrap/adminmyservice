<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $level)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $user = Auth::user();
        if($user->level == $level){
            return $next($request);
        }
            
        return redirect()->route('login')->with('error', 'Anda Tidak Memiliki Akses');
    }
}
