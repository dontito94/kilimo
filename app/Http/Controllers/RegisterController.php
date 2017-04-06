<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\User;


class RegisterController extends Controller
{
    //create a user

    public function register(StoreUserRequest  $request){


    $user = new User;
    $user->first_name=$request->first_name;
    $user->surname=$request->surname;
    $user->password=bcrypt($request->password);
    $user->city=$request->city;
    $user->municipal=$request->municipal;
     $user->ward=$request->ward;
     $user->street=$request->street;
     $user->phone_number=$request->phone_number;
     $user->birth_date=$request->birth_date;

     
   
   


    $user->save();
}

    public  function signin(Request $request){
        $this->validate($request, [

                'first_name' => 'required|max:255',
                'surname' => 'required|max:255',
                'password' => 'required|min:6',
                'city' => 'required|max:255',
                'municipal' => 'required|max:255',
                'ward' => 'required|max:255',
                'street' => 'required|max:255',
                'phone_number' => 'required|max:255',
                'birth_date' => 'required|max:255',
            ]

        );

    }
}