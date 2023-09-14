<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anotherController extends Controller
{
    public function anotheron()
    {        
        $data=[
            'product1'=>'apple',
            'product2'=>'orange'

        ];
        return view('account.index')->with('data',$data);
    }

    public function show($name , $id)
    {
        // $id = id;
        return"this product <b> ".$name."</b> with id <b>".$id. "</b> not found";
        print_r(route('product1'));
       
    }

    public function routename(){
        print_r(route('product2'));
        return view('account.index');
    }
    public function api(){
        return ($_REQUEST->responce);
    }

}

