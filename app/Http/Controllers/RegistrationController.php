<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestForm;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function store(RequestForm $form) 
    {
        $form->persist();
        // $this->validate(request(),[
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed'
        // ]);

        // $user = User::create(request(['name', 'email', 'password']));

        // auth()->login($user);

        // \Mail::to($user)->send(new Welcome($user));
        
        // session()->flash('message', 'say something.');    

        return redirect()->home();
    }
}
