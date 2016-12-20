<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

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
            $result=DB::select("SELECT * FROM `user` where username=?",[Auth::user()->username]);
            $type=$result[0]->type;
            if ($type==1){
                return view('employee/pages/connections')->with('message', 'Login successful');
            }
            elseif ($type==2){
                return view('customer/welcome')->with('message', 'Login successful');
            }
//            return view('welcome')->with('message', 'Login successful');
        } else {
            return view('auth/login')->with('message', 'Login failed. Check email and password');
        }
    }
    public function username()
    {
        return 'username';
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

    public function signup(Request $request){
        DB::statement("INSERT INTO `user` (`user_id`, `username`, `password`, `type`, `access_level`, `image_link`, `remember_token`) VALUES (3,?,?,?,?, NULL,NULL)",[
            $request['username'],
            bcrypt($request['password']),
            $request['type'],
            $request['access_level']
        ]);

        return view('auth/login')->with('message', 'Successfully signed up.');
    }
}