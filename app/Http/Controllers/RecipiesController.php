<?php

namespace App\Http\Controllers;
use App\Recipie;
use Illuminate\Http\Request;

class RecipiesController extends Controller
{
    public function recipies() {
        $recs = Recipie::paginate(15);
        return view('recipies.index')->with('recs', $recs);
    }

    public function recipie($id) {
        $rec = Recipie::find($id);
        return view('recipies.show')->with(['rec' => $rec]);
    }
}
