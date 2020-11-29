<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sreaktor;

class SuhureaktorController extends Controller
{
    public function create(Request $request)
    {
        $suhu = new Sreaktor();
        $suhu->suhu = $request->input('rsuhu');        
        $suhu->save();
        return response()->json($suhu);

    }
}
