<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $request){
        $request->validate([
            "username"=>"required",
            "password"=>"required"
        ]);

        $data = $request->input();
        $request->session()->put('user', $data['username']);
        return redirect('profile'); //Put session as a key "user"
    }
}
