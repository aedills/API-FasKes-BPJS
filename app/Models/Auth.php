<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Auth extends Model
{
    use HasFactory;
    public function in($data){
        $user = DB::table('users')->where('email', $data['email'])->first();
        if($user && Hash::check($data['p'], $user->p4ssword)){
            return true;
        }
        else{
            return false;
        }
    }
}
