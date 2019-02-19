<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class MaintenanceMode
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
      $on = DB::table('configurations')
      ->where('name', '=', 'maintenance')
      ->where('value', '=', 'on')
      ->count();
      if ($on > 0) {
        return redirect('/maintenance');
      } else {
        return $next($request);
      }

    }
}
