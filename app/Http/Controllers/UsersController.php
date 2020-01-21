<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userLoginRegister(){
        
        return view('trucksmarkt.users.login_register');

    }

    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            // echo '<pre>';print_r($data);die;
            // Check if User already exists
            $usersCount = User::where('email', $data['email'])->count();
            if ($usersCount > 0) {
                return redirect()->back()->with('flash_message_error', 'Email already exists!');
            } else {
                // echo "success";die;
                $user = new User;
                $user->name = $data['username'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    return redirect('/cart');
                }

            }
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect('/');

    }
    public function  checkEmail(Request $request)
    {
        // Check if User already exists
        $data = $request->all();
        $usersCount = User::where('email', $data['email'])->count();
        if ($usersCount > 0) {
            echo "false";
        } else {
            echo "true";
            die;
        }
    }
}
