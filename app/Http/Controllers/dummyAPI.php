<?php

namespace App\Http\Controllers;

use App\Models\User;

class dummyAPI extends Controller
{
    // Show some dummy data
    function showData(){
        // $data = [
        //     'name' => 'Shakib',
        //     'email' => 'shakib@gmail.com',
        //     'address' => 'Khulna',
        //     'company' => 'Munshi IT',
        // ];
        
        return User::all();
    }
}
