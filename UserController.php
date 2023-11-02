<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()

    {

        return view('profile');
    }

    public function index()
    {
        $users = User::all();
        return view('user', ['users' => $users]);
    }

    public function add()
    {
        return view('user-add');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect('users')->with('status', 'Berhasil Menambah User');
    }
    public function edit(Request $Request, $id)

    {
        $user = User::findOrFail($id);
        return view('user-edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect('users')->with('status', 'Berhasil Mengupdate Data');
    }
    public function hilang($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('users')->with('status', 'User Berhasil Dihapus');
    }
}
