<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{

	public function handle($request, Closure $next)
	{
		if (auth()->guest()){
			return redirect('/login');
		}

		if (auth()->user()->is_admin != 'admin'){
			return redirect('/');
		}

		return $next($request);
	}
}