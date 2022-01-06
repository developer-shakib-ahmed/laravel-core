<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Support\Facades\Hash;


class myUsersController extends Controller
{

    public function showData()
    {

        // return DB::select("SELECT * FROM users");
        return User::all( );

    }

    
    public function getData( Request $request )
    {

        $request->session()->flash('email', $request->input('email'));

        $request->validate([
            'email'     => 'required | email',
            'password'  => 'required | min:8 | max:16',
        ]);

        $request->session()->flash('success', 'true');

        return redirect('mylogin');

    }


    public function create()
    {
        return view('user_add');
    }


    public function store( Request $request )
    {
        $request->session()->flash('name', $request->name);

        $request->session()->flash('email', $request->email);

        $request->validate([
            'name'              => 'required',
            'email'             => 'required | email | unique:users',
            'password'          => 'required | min:8 | max:16',
            'confirm_password'  => 'required | min:8 | max:16 | required_with:password|same:password',
        ]);

        $data = new User;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->password = Hash::make($request->password);

        $data->save();

        $request->session()->flash('add_success', 'true');

        return redirect('/');
    }


    public function show( $id )
    {
        $data = User::find( $id );
        return view('user_show', ['data' => $data]);
    }


    public function edit( $id )
    {
        $data = User::find( $id );
        return view('user_edit', ['data' => $data]);
    }


    public function update( Request $request )
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required | email',
        ]);

        $data = User::find( $request->id );

        $data->name = $request->name;

        $data->email = $request->email;

        $data->save();

        $request->session()->flash('success', 'true');

        return redirect('/');
    }


    public function destroy( Request $request, $id )
    {
        $data = User::find( $id );

        $data->delete();

        $request->session()->flash('delete', $data['name']);

        return redirect('/');
    }
    

}
