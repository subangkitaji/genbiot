<?php

namespace App\Http\Controllers;
use App\Gas;
use Illuminate\Http\Request;

class GasController extends Controller
{
    public function create(Request $request)
    {
        $gas = new Gas();
        $gas->gas = $request->input('gas');        
        $gas->save();
        return response()->json($gas);

    }
}
