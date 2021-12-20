<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class SubscribeController extends Controller
{
    //
    public function subscribe(Request $request)
    {
        $data = [
            'email' => 'required|email:dns'
        ];

        $validatedData = $request->validate($data);

        $insert = Subscribe::create($validatedData);

        if($insert){
            Alert::success('Success' , 'Subscribe Success');
            return redirect('/');
        }

        Alert::error('Error' , 'Subscribe Failed');
        return redirect('/');





        // if($insert ){
        //     return Alert::success('Success' , 'Subscribe Success');
        // }
        // return Alert::error('Failed' , 'Subscribe Failed');
    }
}
