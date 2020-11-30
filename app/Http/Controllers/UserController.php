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
        $data['users'] = User::role('admin')->get();
        return view('user.index')->with($data);
    }

    public function edit($id)
    {
        $data['users'] =User::findOrFail($id);
        return view('user.edit')->with($data);
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

    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'username'   => 'required',
            'name'       => 'required',
        ]);
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->update();
        
        return redirect('dashboard/register');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        if(!empty($user))
        {
            $user->delete();
            
            return redirect()->back();
        }
        else {
          
            return redirect()->back();
        }
    }
    
}
