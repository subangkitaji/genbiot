<?php

namespace App\Http\Controllers;
use App\Sreaktor;
use App\Jarak;
use App\Bmp;
use App\Gas;
use App\Susistem;
use Illuminate\Http\Request;

class ChartsApiController extends Controller
{
    public function index()
    {
        
        $sreaktor = Sreaktor::latest()->take(20)->get();
        $labels = $sreaktor->pluck('created_at');
        $data = $sreaktor->pluck('suhu');

        return response()->json(compact('labels', 'data'));
    }

    public function cjarak()
    {
        $jarak = Jarak::latest()->take(20)->get();
        $labels = $jarak->pluck('created_at');
        $data = $jarak->pluck('jarak');

        return response()->json(compact('labels', 'data'));
    }

    public function csusistem()
    {
        $susistem = Susistem::latest()->take(20)->get();
        $labels = $susistem->pluck('created_at');
        $data = $susistem->pluck('susistem');

        return response()->json(compact('labels', 'data'));
    }

    public function cbmp()
    {
        $bmp = Bmp::latest()->take(20)->get();
        $labels = $bmp->pluck('created_at');
        $data = $bmp->pluck('bmp');

        return response()->json(compact('labels', 'data'));
    }

    public function cgas()
    {
        $gas = Gas::latest()->take(20)->get();
        $labels = $gas->pluck('created_at');
        $data = $gas->pluck('gas');

        return response()->json(compact('labels', 'data'));
    }
}
