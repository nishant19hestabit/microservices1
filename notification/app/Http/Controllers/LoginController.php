<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function check(Request $request)
    {
        return view('welcome');
    }
}
