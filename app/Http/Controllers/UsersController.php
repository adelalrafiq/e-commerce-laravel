<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            // echo '<pre>';print_r($data);die;
            // Check if User already exists
            $usersCount = User::where('email', $data['email'])->count();
            if ($usersCount > 0) {
                return redirect()->back()->with('flash_message_error', 'Email already exists!');
            }else{
                echo "success";die;
            }
        }
        return view('trucksmarkt.users.login_register');
    }
}
