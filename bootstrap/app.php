<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(basePath: dirname(__DIR__))
        ->withRouting(
            web: __DIR__.'/../routes/web.php',
            // api: __DIR__.'/../routes/api.php',
            commands: __DIR__.'/../routes/console.php',
            health: '/up',
        )

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'is_admin' => \App\Http\Middleware\IsAdmin::class,
            'is_employee' => \App\Http\Middleware\IsEmployee::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
