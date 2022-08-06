<?php

namespace App\Http\Controllers;

use App\Models\Passwords;
use Illuminate\Http\Request;

class SenhasController extends Controller
{
    public function index(Request $request)
    {
        $senhas = Passwords::all();

        return view('senhas.index')
            ->with('senhas', $senhas);
    }

    public function create () {
        return view('senhas.create');
    }

    public function store (Request $r) {
        $service = $r->input('nome');
        $password = $r->input('senha');

        $tab = new Passwords();

        $tab -> service = $service;
        $tab -> password = $password;

        $tab -> save();

        return redirect('/senhas');
    }
}
