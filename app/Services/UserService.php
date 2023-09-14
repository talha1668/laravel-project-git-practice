<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;
use App\Models\Userphn;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function Signup($request)
    {
        // $request->validated();

        User::create([
            'usernames' => $request->input('username'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'useremail' => $request->input('useremail'),
            'password' => Hash::make($request->input('password')),
            'gender' => $request->input('gender'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zipcode' => $request->input('zipcode'),
        ]);
        return redirect()->route('login');



    }

public function showData()
    {
        $userData = User::all();
        
        return view('account.dashboard',compact('userData'));

    }
    public function login_auth(Request $request) {
        // $credentials = $request->only('email', 'password');
        // dd($credentials);
        $credentials = [];
        $credentials['userEmail'] = $request->email;
        $credentials['password'] = $request->password;



        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        } else {
            if (User::where('userEmail', $request->input('email'))->exists()) {
                return redirect()->back()->with('error', 'Wrong password');
            } else {
                return redirect()->back()->with('error', 'User account does not exist');
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }



public function getBuyerData($request){
    Userphn::create([
        'name'=>$request->input('name'),
        'email'=>$request->input('email')

    ]);
    return redirect()->route('phones');
}
}
