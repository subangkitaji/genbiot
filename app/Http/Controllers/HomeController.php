<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bmp;
use App\Jarak;
use App\Sreaktor;
use App\Susistem;
use App\Gas;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getData()
    {
        $bmp      = Bmp::latest()->limit(1)->get();
        $jarak    = Jarak::latest()->limit(1)->get();
        $sreaktor = Sreaktor::latest()->limit(1)->get();
        $susistem = Susistem::latest()->limit(1)->get();
        $gas = Gas::latest()->limit(1)->get();
        $bmpdata['bmpdata'] = $bmp;
        $jarakdata['jarakdata'] = $jarak;
        $sreaktordata['sreaktordata'] = $sreaktor;
        $susistemdata['susistemdata'] = $susistem;
        $gasdata['gasdata'] = $gas;
        return response()->json(compact('bmpdata', 'jarakdata','sreaktordata','susistemdata', 'gas'));
        exit;

    }
}
