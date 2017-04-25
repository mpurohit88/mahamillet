<?php

namespace App\Http\Controllers;
use Sentinel;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register() {
        return view('authentication.register');
    }

    public function postRegister(Request $request) {
        $this->validate($request, [
            'email' => 'unique:users|required',
            'password' => 'confirmed|required|min:5',
            'password_confirmation' => 'required|min:5'
        ]);
        $user = Sentinel::registerAndActivate($request->all());
        $role = Sentinel::findRoleBySlug('customer');
        $role->users()->attach($user);
        return redirect('/');
    }
}
