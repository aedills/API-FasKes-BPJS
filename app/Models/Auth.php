<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Auth extends Model
{
    use HasFactory;
    public function in($data, Request $request){
        $user = DB::table('users')->where('email', $data['email'])->first();
        if($user && Hash::check($data['p'], $user->p4ssword)){
            $request->session()->put('auth_data', $user);
            return true;
        }
        else{
            return false;
        }
    }

    public function registration($nama, $email, $p, Request $request){
        $pass = password_hash($p, PASSWORD_DEFAULT);
        $key = $this->createKey($nama, $p);
        $data = array(
            'username' => $nama,
            'email' => $email,
            'p4ssword' => $pass,
            'k3y' => $key
        );

        DB::table('users')->insert($data);

        $user = DB::table('users')->where('email', $email)->first();
        if($user && Hash::check($p, $user->p4ssword)){
            $request->session()->put('auth_data', $user);
            return true;
        }
        else{
            return false;
        }
    }

    protected function createKey($x, $y){
        $seed = $y.$x;
        $raw = md5($seed);
        $rand = bin2hex(random_bytes(16));
        $key = substr($raw, 0, 32) . $rand;
        return substr($key, 0, 32);
    }
}
