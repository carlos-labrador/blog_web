<?php

namespace App\Http\Controllers;

use App\Enums\UserType;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        $user = User::create($request->validated());
        $user->roles()->attach(UserType::User);
        auth()->login($user);
        return redirect('/')->with('sucess',"Registration completed");
    }
}
