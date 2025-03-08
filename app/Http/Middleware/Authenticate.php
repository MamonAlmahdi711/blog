<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
<<<<<<< HEAD
     * Get ccccccc the path the user should be redirected to when they are not authenticated.
=======
     *  path the user should be redirected to when they are not authenticated.
>>>>>>> MAMON
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
