<?php

namespace App\Http\Controllers;

use App\Views\Composers\MultiComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function home(Request $request)
    {

        $data = array();
        // return view(['component.head', 'component.foot'], compact($data1, $data2));
        // return view('component/head', $data1)->with('home')->with('component/foot', $data2);
        return view('home', $data);

    }

    public function login(){
        return view('auth.login');
    }
}
