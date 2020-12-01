<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jarak;
class JarakController extends Controller
{
    public function create(Request $request)
    {
        $jarak = new Sreaktor();
        $jarak->jarak = $request->input('jarak');        
        $jarak->save();
        return response()->json($jarak);

    }
}
