<?php

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
        $middleware->validateCsrfTokens(except:[
<<<<<<< HEAD
            'http://modelramirez.test/students',
            'http://modelramirez.test/students/31',
=======
            'http://Modelltabalbag.test',
>>>>>>> 7d9dc3c26568ae5f62dbc6cb6a26ea11b56d591d
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
