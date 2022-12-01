<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Users_Controller extends Controller
{
    public function login(Request $request)
    {
        return $request->input();
    }
}
