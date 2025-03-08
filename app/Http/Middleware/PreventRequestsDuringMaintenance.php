<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * jooooood   ance mode is enabled.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
