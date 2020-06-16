<?php

namespace App\Http\Controllers;

use App\Cagnolini;

use Illuminate\Http\Request;

class cagnolini_controller extends Controller
{
    public function index()
    {
        $cagnolini = Cagnolini::all();
        return view('home', compact('cagnolini'));
    }

    public function show($id)
    {
        $cagnolino = Cagnolini::findOrFail($id);
        return view('dog', compact('cagnolino'));
    }
}
