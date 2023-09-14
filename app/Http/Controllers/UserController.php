<?php

namespace App\Http\Controllers;

use App\Http\Requests\Signupvalidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createUser()
    {
        return view('form');
    }

    
    public function Signup(Signupvalidation $request)
    {
       return $this->getUserService()->signup($request);
    }
    
    public function showData()
    {
        return $this->getUserService()->showData();
       
    }
    public function logout()
    {
        return $this->getUserService()->logout();
    }
    public function phnbuyer(){        
        return view('phnbuyer');
    }
    public function getBuyerData(Request $request){
      
        return $this->getUserService()->getBuyerData($request);   
     }
};
