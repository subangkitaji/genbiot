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
        $latestData = Sreaktor::latest()->take(1)->get();
        $labels = $sreaktor->pluck('created_at');
        $data = $sreaktor->pluck('suhu');
        $latestLabels = $latestData->pluck('created_at');
        $latest_data = $latestData->pluck('suhu');
        return response()->json(compact('labels', 'data', 'latestLabels', 'latest_data'));
    }

    public function cjarak()
    {
        $jarak = Jarak::latest()->take(20)->get();
        $latestData = Jarak::latest()->take(1)->get();
        $labels = $jarak->pluck('created_at');
        $data = $jarak->pluck('jarak');
        $latestLabels = $latestData->pluck('created_at');
        $latest_data = $latestData->pluck('jarak');

        return response()->json(compact('labels', 'data', 'latestLabels', 'latest_data'));
    }

    public function csusistem()
    {
        $susistem = Susistem::latest()->take(20)->get();
        $latestData = Susistem::latest()->take(1)->get();
        $labels = $susistem->pluck('created_at');
        $data = $susistem->pluck('susistem');
        $latestLabels = $latestData->pluck('created_at');
        $latest_data = $latestData->pluck('susistem');

        return response()->json(compact('labels', 'data', 'latestLabels', 'latest_data'));
    }

    public function cbmp()
    {
        $bmp = Bmp::latest()->take(20)->get();
        $latestData = Bmp::latest()->take(1)->get();
        $labels = $bmp->pluck('created_at');
        $data = $bmp->pluck('bmp');
        $latestLabels = $latestData->pluck('created_at');
        $latest_data = $latestData->pluck('bmp');

        return response()->json(compact('labels', 'data', 'latestLabels', 'latest_data'));
    }

    public function cgas()
    {
        $gas = Gas::latest()->take(1)->get();
        $labels = $gas->pluck('created_at');
        $data = $gas->pluck('gas');

        return response()->json(compact('labels', 'data'));
    }
}
