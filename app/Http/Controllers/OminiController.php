<?php

namespace App\Http\Controllers;

use App\Omino;

use Illuminate\Http\Request;

class OminiController extends Controller
{
    public function index()
    {
        $omini = Omino::all();
        return view('pages.home', compact('omini'));
    }

    public function show($id)
    {
        $omino = Omino::findOrFail($id);
        return view('pages.showOmino', compact('omino'));
    }

    public function delete($id)
    {
        $omino = Omino::findOrFail($id);
        $omino -> delete();
        return redirect() -> route('home');
    }

    public function create()
    {
        return view('pages.addOmino');
    }

    public function store(Request $request)
    {
        $data = $request -> all();
        $new_omino = new Omino;
        $new_omino -> first_name = $data['first_name'];
        $new_omino -> last_name = $data['last_name'];
        $new_omino -> address = $data['address'];
        $new_omino -> code = $data['code'];
        $new_omino -> state = $data['state'];
        $new_omino -> phone_numeber = $data['phone_number'];
        $new_omino -> role = $data['role'];
        $new_omino -> save();
        return redirect() -> route('home');
    }

    public function edit($id)
    {
        $omino = Omino::findOrFail($id);
        return view('pages.editOmino', compact('omino'));
    }

    public function update(Request $request, $id)
    {
        $data = $request -> all();
        $omino_update = Omino::findOrFail($id);

        $omino_update -> first_name = $data['first_name'];
        $omino_update -> last_name = $data['last_name'];
        $omino_update -> address = $data['address'];
        $omino_update -> code = $data['code'];
        $omino_update -> state = $data['state'];
        $omino_update -> phone_numeber = $data['phone_number'];
        $omino_update -> role = $data['role'];
        $omino_update -> save();

        return redirect() -> route('showOmino', $omino_update['id']);
    }
}
