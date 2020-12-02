<?php

namespace App\Http\Controllers;
use App\Bmp;
use App\Jarak;
use App\Sreaktor;
use App\Susistem;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        
        return view('dashboard');
    }

    public function getData()
    {
        $bmp      = Bmp::latest()->limit(1)->get();
        $jarak    = Bmp::latest()->limit(1)->get();
        $sreaktor = Bmp::latest()->limit(1)->get();
        $susistem = Bmp::latest()->limit(1)->get();
        $bmpdata['bmpdata'] = $bmp;
        $jarakdata['jarakdata'] = $jarak;
        $sreaktordata['sreaktordata'] = $sreaktor;
        $susistemdata['susistemdata'] = $susistem;
        echo json_encode($bmpdata,$jarakdata,$sreaktordata,$susistemdata);
        exit;

    }
}

