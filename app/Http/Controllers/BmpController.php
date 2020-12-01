<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bmp;
class BmpController extends Controller
{
    public function create(Request $request)
    {
        $bmp = new Bmp();
        $bmp->bmp = $request->input('bmp');        
        $bmp->save();
        return response()->json($bmp);

    }
}
