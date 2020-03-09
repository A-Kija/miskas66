<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class MiskasController extends Controller
{
    public function index($zveris, $zveris2)
    {
        return "Miske gyvena piktas $zveris ir nepiktas $zveris2";
    }

    public function index66()
    {
        return 'Tai yra GIRIA';
    }

    public function suma($sk1, $sk2)
    {
        $rezultatas = $sk1 + $sk2;
        
        return view('miskas.suma', ['sudetis' => $rezultatas]);
    }

    public function showForm()
    {
        $rezultatas = Session::get('rez');
        
        return view('miskas.form',['rez' => $rezultatas]);
    }

    public function sum(Request $request)
    {
        $skaicius1 = $request->sk1;
        $skaicius2 = $request->sk2;
        $suma = $skaicius1 + $skaicius2;
        
        $request->flash();

        return redirect()->back()->with(['rez' => $suma]);


    }
}
