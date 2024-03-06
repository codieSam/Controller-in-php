<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// SingleActionController (php artisan make:controller SingleActionController --invokable)
class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       return view('display');
    }
}
