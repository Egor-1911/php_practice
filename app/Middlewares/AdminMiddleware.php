<?php
namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class AdminMiddleware
{
    public function handle(Request $request)
    {
        if (!Auth::check()) {
            app()->route->redirect('/login');
            exit;
        }

        if (!Auth::user() || !Auth::user()->isAdmin()) {
            app()->route->redirect('/hello');
            exit;
        }
    }
}