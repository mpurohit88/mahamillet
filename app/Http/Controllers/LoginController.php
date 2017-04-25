<?php

namespace App\Http\Controllers;
use Sentinel;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('authentication.login');
    }

    public function postLogin(Request $request) {
        if(Sentinel::authenticate($request->all())) {
            $slug = Sentinel::getUser()->roles()->first()->slug;

            if ($slug == 'admin') {
                return redirect('/admin');
            }	else {
                return redirect('/');
            }
        }
        else
            return redirect()->back()->with(['error' => 'Wrong Credentials!']);
        /*if(User::byEmail($request->email) != NULL) {
            if(User::byEmail($request->email)->status == 1 || Sentinel::findById(User::byEmail($request->email)->id)->roles()->first()->slug == 'admin')
                try {
                    if(Sentinel::authenticate($request->all())) {
                        $slug = Sentinel::getUser()->roles()->first()->slug;

                        if ($slug == 'admin') {
                            return redirect('/admin');
                        }	else {
                            return redirect('/');
                        }
                    }
                    else
                        return redirect()->back()->with(['error' => 'Wrong Credentials!']);
                } catch(ThrottlingException $e) {
                    $delay =$e->getDelay();
                    return redirect()->back()->with(['error' => "You are bound for $delay seconds"]);
                } catch(NotActivatedException $e) {
                    return redirect()->back()->with(['error' => "Your Account is Not Activated"]);
                }
            else
                return redirect()->back()->with(['error' => 'Wrong Credentials!']);
        }
        else
            return redirect()->back()->with(['error' => 'Wrong Credentials!']);*/
    }

    public function logout() {
        Sentinel::logout();
        return redirect('/login');
    }
}
