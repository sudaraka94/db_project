<?php

namespace App\Http\Controllers\Auth;

//use App\DBModels\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        $logged_in = Auth::attempt(['username' => $request['username'], 'password' => $request['password']]);
        if ($logged_in) {
            return view('welcome')->with('message', 'Login successful');
        } else {
            return view('welcome')->with('message', 'Login failed. Check email and password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login')->with('message', 'You are now logged out');
    }

//    public function changePassword(Request $request)
//    {
//        $this->validate($request, [
//            'old_password' => 'required|max:255',
//            'new_password' => 'required|max:255',
//            're_new_password' => 'required|max:255',
//        ]);
//        $old_password = $request['old_password'];
//        $new_password = $request['new_password'];
//        $re_new_password = $request['re_new_password'];
//        $id = Auth::user()->id;
//
//        if ($new_password === $re_new_password and $id !== null) {
//            Person::updatePassword($id, $old_password, $new_password);
//        }
//    }
}