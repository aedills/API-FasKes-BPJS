<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class Ajax extends Controller
{
    //
    public function doc(Request $request){
        $endpoint = $request->input('end');
        $data = new stdClass();
        $data = [
            'data' => $request->session()->get('auth_data')
        ];
        return view('documentations.'.$endpoint, $data);
    }
}
