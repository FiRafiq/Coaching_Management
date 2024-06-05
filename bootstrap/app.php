<?php

use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckAuthor;
use App\Http\Middleware\CheckRole;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->append(CheckRole::class);// not working
        $middleware->alias(['author'=> CheckAuthor::class]);
        $middleware->alias(['admin'=> CheckAdmin::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
