<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            echo '<pre>';
            print_r($data);die;
        }
        return view('trucksmarkt.users.login_register');
    }
}
