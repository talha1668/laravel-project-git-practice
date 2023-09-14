<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function loginform()
    {
        return view('account.login');
        
    }
    public function login_auth(Request $request)
    {
        return $this->getUserService()->login_auth($request);
    }
}
