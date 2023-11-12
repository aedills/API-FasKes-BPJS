<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use stdClass;

class Main extends Controller
{
    public function home(Request $request){
        $data = new stdClass();
        $data = [
            'data' => $request->session()->get('auth_data')
        ];
        return view('home', $data);
    }

    public function key(Request $request){
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

    // Login
    public function loginRun(Request $request){
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
    
    // Login
    public function logout(Request $request){
        $request->session()->forget('auth_data');
        return redirect('/login');
    }

    // Registrasi
    public function reg(Request $request){
        $auth = new Auth();

        $nama = $request->input('nama');
        $email = $request->input('email');
        $p1 = $request->input('pA');
        $p2 = $request->input('pB');

        if($p1 != $p2){
            return redirect('/regist');
        }
        else{
            if($email){
                $status = $auth->registration($nama, $email, $p2, $request);
                if($status == true){
                    return redirect('/home');
                }
                else{
                    return redirect('/regist');
                }
            }
            else{
                return redirect('/regist');
            }
        }
    }
}
