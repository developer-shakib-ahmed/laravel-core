<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class myUsersController extends Controller {

    public function showData(){

        // return DB::select("SELECT * FROM users");
        return User::all('id', 'name');

    }

    
    public function getData( Request $request ) {

        $request->session()->flash('email', $request->input('email'));

        $request->validate([
            'email'     => 'required | email',
            'password'  => 'required | min:8 | max:16',
        ]);

        $request->session()->flash('success', 'true');

        return redirect('mylogin');

    }
    

}
