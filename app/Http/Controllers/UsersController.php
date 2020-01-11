<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function register()
    {
        return view('trucksmarkt.users.login_register');
    }
}
