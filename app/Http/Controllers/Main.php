<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use stdClass;

class Main extends Controller
{
    public function home(Request $request)
    {
        $data = new stdClass();
        $data = [
            'data' => $request->session()->get('auth_data')
        ];
        return view('home', $data);
    }

    public function key(Request $request)
    {
        $data = new stdClass();
        $data = [
            'data' => $request->session()->get('auth_data')
        ];
        return view('key', $data);
    }

    public function doc(Request $request){
        $data = new stdClass();
        $data = [
            'data' => $request->session()->get('auth_data')
        ];
        return view('endpoint', $data); 
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
            if ($auth->in($credentials, $request) == true) {
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
    
    public function logout(Request $request){
        $request->session()->forget('auth_data');
        return redirect('/login');
    }
}
