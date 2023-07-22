<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pool;
use App\Models\Krasot;
use App\Models\Brone;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function nomera()
    {
        return view('pages.nomera');
    }
    public function restoran()
    {
        return view('pages.restoran');
    }
    public function pool()
    {
        return view('pages.pool');
    }
    public function pool_send(Request $request)
    {
        $valid = $request->validate([
            'date' => ['required', 'min:1', 'max:100', 'string']
        ]);
        $pool = new Pool;
        $pool->date = $request->input('date');
        $pool->save();
        return redirect()->route('pool');
    }
    public function krasota_send(Request $request)
    {
        $valid = $request->validate([
            'date' => ['required', 'min:1', 'max:100', 'string']
        ]);
        $krasota = new Krasot;
        $krasota->date = $request->input('date');
        $krasota->save();
        return redirect()->route('krasota');
    }
    public function krasota()
    {
        return view('pages.krasota');
    }
    public function electro()
    {
        return view('pages.electro');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function brone()
    {
        return view('pages.brone');
    }
    
    public function brone_send(Request $request)
    {
        $valid = $request->validate([
            'entry' => ['required', 'min:1', 'max:100', 'string'],
            'departure' => ['required', 'min:1', 'max:100', 'string'],
            'person' => ['required', 'min:1', 'max:100', 'string'],
            'kid' => ['required', 'min:1', 'max:100', 'string'],
            'nomer' => ['required', 'min:1', 'max:100', 'string'],
        ]);
        $brone = new Brone;
        $brone->entry = $request->input('entry');
        $brone->departure = $request->input('departure');
        $brone->person = $request->input('person');
        $brone->kid = $request->input('kid');
        $brone->nomer = $request->input('nomer');
        $brone->save();
        return redirect()->route('brone');
    }
}