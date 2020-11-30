<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('user.index');
    }

    public function save(Request $request)
    {
        $request->validate([
            'username'   => 'required',
            'name'       => 'required',
            'password'   => 'required|min:8|same:r_password',
            'r_password' => 'required'
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->password = bcrypt($request->input('password'));
        $user->assignRole('admin');
        $user->save();

        return redirect()->back();
        alert('berhasil menambah data');

    }
    
}
