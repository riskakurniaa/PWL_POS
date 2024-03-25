<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MUserController extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    public function create()
    {
        $level = LevelModel::all();
        return view('user.create', ['level' => $level]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'level_id' => 'required',
            'username' => 'required',
            'username' => 'required|unique:m_user,username',
            'nama' => 'required',
        ]);

        UserModel::create([
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/user');
    }

    public function edit($id)
    {
        $user = UserModel::find($id);
        return view('user.edit', ['data' => $user]);
    }

    public function update($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    public function delete($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
