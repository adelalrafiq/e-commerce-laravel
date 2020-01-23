<?php

namespace App\Http\Controllers;

use App\User;
use App\Country;
use Auth;
use Session;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userRegister()
    {

        return view('trucksmarkt.users.user_register');
    }

    public function userLogin()
    {
        return view('trucksmarkt.users.user_login');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            // echo '<pre>'; print_r($data);die;
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                Session::put('frontSession', $data['email']);
                return redirect('/cart');
            } else {
                return redirect()->back()->with('flash_message_error', 'Invalid Email or Password!');
            }
        }
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
                $user->user_name = $data['user_name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();
                if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                    Session::put('frontSession', $data['email']);
                    return redirect('/cart');
                }
            }
        }
    }

    public function account(Request $request)
    {
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        $countries = Country::get();

        if ($request->isMethod('post')) {
            $data = $request->all();
            if (empty($data['user_name'])) {
                return redirect()->back()->with('flash_message_error', 'Please enter your User Name  to update your account details!');
            }
            if (empty($data['email'])) {
                return redirect()->back()->with('flash_message_error', 'Please enter your Email  to update your account details!');
            }
            if (empty($data['first_name'])) {
                $data['first_name'] = '';
            }
            if (empty($data['last_name'])) {
                $data['last_name'] = '';
            }
            if (empty($data['address'])) {
                $data['address'] = '';
            }
            if (empty($data['postal_code'])) {
                $data['postal_code'] = '';
            }
            if (empty($data['city'])) {
                $data['city'] = '';
            }
            if (empty($data['state'])) {
                $data['state'] = '';
            }
            if (empty($data['country'])) {
                $data['country'] = '';
            }
            if (empty($data['tel'])) {
                $data['tel'] = '';
            }
            $user = User::find($user_id);
            $user->user_name = $data['user_name'];
            $user->email = $data['email'];
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->address = $data['address'];
            $user->postal_code = $data['postal_code'];
            $user->city = $data['city'];
            $user->state = $data['state'];
            $user->country = $data['country'];
            $user->tel = $data['tel'];
            $user->save();
            return redirect()->back()->with('flash_message_success', 'Your account details has been successuly updated!');
        }
        return view('trucksmarkt.users.account')->with(compact('countries', 'userDetails', 'user_id'));
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('frontSession');
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
