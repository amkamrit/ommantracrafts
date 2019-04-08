<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Admin
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
         $section_for_admin=Session::get('user_names');
        if (empty($section_for_admin)) {

            return redirect('/admin/login');   
        }   
            return $next($request);
    }
}
