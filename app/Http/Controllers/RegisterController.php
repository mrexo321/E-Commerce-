<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('register.index');
    }

    public function register(Request $request)
    {

        $data = $request->validate([
            'username' => 'required|unique:users',
            'password'=> 'required'
        ]);

        $data['password'] = Hash::make($data['password']);

        $validRegis = User::create($data);




        if($validRegis){
            Alert::success('Success' , 'Registration Success');
            return redirect('/');
        }


    }
}
