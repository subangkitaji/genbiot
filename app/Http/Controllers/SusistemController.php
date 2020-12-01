<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Susistem;
class SusistemController extends Controller
{
    public function create(Request $request)
    {
        $susistem = new Susistem();
        $susistem->susistem = $request->input('susistem');        
        $susistem->save();
        return response()->json($susistem);

    }
}
