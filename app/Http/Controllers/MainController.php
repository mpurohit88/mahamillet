<?php

/*
 *
 * Main page for all generic Views and Functions like home, Contact Us, About Us etc.
 *
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('basic.welcome');
    }

    public function contact() {
        return view('basic.contact');
    }

    public function about() {
        return view('basic.about');
    }
}
