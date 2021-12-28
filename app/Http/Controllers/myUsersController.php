<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myUsersController extends Controller {
    
    public function getData( Request $request ) {

        $request->validate([
            'email'     => 'required | email',
            'password'  => 'required | min:8 | max:16'
        ]);

        $data = $request->input();

        return $data;

    }

}
