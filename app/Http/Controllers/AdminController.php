<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Recipie;

class AdminController extends Controller
{
    public function admin() {
        return view('admin.dashboard');
    }

    public function recipies() {
        return view('admin.crecipies');
    }

    public function postRecipies(Request $request) {
        $rec = new Recipie;
        $rec->title = $request->title;
        $rec->description = $request->description;
        $rec->ingredients = $request->ingredients;
        $rec->steps = $request->steps;
        $rec->save();
        return redirect()->route('crecipies');
    }
}
