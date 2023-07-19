<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use stdClass;

class Main extends Controller
{
    public function home(Request $request)
    {
        return view('home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginRun(Request $request)
    {
        $auth = new Auth();

        $credentials = array(
            "email" => $request->input('email'),
            "p" => $request->input('p')
        );
        if ($request->input('email') && $request->input('p')) {
            if ($auth->in($credentials) == true) {
                return redirect('/');
            }
            else{
                return redirect('/login');
            }
        }
        else{
            return redirect('/login');
        }
    }
}
