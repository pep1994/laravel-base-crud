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
        return redirect()
         -> route('home')
         -> withSuccess("L'omino " . $omino['first_name'] . " è stato correttamente eliminato");
    }

    public function create()
    {
        return view('pages.addOmino');
    }

    public function store(Request $request)
    {
        $validate = $request -> validate([
            "first_name" => 'required|alpha',
            "last_name" => 'required|alpha',
            "address" => 'required|string',
            "code" => 'required|integer',
            "state" => 'required|alpha',
            "phone_number" => 'required|integer',
            "role" => 'required|string'
        ]);

        $new_omino = new Omino;
        $new_omino -> first_name = $validate['first_name'];
        $new_omino -> last_name = $validate['last_name'];
        $new_omino -> address = $validate['address'];
        $new_omino -> code = $validate['code'];
        $new_omino -> state = $validate['state'];
        $new_omino -> phone_numeber = $validate['phone_number'];
        $new_omino -> role = $validate['role'];
        $new_omino -> save();
        return redirect()
         -> route('home')
         -> withSuccess("L'omino " . $validate['first_name'] . ' è stato inserito con successo');
    }

    public function edit($id)
    {
        $omino = Omino::findOrFail($id);
        return view('pages.editOmino', compact('omino'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request -> validate([
            "first_name" => 'required|alpha',
            "last_name" => 'required|alpha',
            "address" => 'required|string',
            "code" => 'required|integer',
            "state" => 'required|alpha',
            "phone_number" => 'required|integer',
            "role" => 'required|string'
        ]);

        $omino_update = Omino::findOrFail($id);

        $omino_update -> first_name = $validate['first_name'];
        $omino_update -> last_name = $validate['last_name'];
        $omino_update -> address = $validate['address'];
        $omino_update -> code = $validate['code'];
        $omino_update -> state = $validate['state'];
        $omino_update -> phone_numeber = $validate['phone_number'];
        $omino_update -> role = $validate['role'];
        $omino_update -> save();

        return redirect()
         -> route('showOmino', $omino_update['id'])
         -> withSuccess("Updated dell'omino " . $validate['first_name'] . " riuscito con successo");
    }
}
