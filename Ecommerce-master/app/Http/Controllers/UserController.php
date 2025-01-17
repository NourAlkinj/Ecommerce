<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username & Password not matched";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }


    function storeUser(Request $req){
        return $this->store($req, User::class,'users');
    }

    function deleteUser($id){
        return $this->delete($id, User::class,'users');
    }
}
