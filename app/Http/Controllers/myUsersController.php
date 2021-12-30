<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class myUsersController extends Controller {

    public function showData(){

        return DB::select("SELECT * FROM users");

    }

    
    public function getData( Request $request ) {

        $request->validate([
            'email'     => 'required | email',
            'password'  => 'required | min:8 | max:16',
        ]);

        $data = $request->input();

        return $data;

    }
    

}
