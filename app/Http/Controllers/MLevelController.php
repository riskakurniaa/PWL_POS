<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\LevelDataTable;
use App\Models\LevelModel;

class MLevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }

    public function create()
    {
        return view('level.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'levelKode' => 'required',
            'namaLevel' => 'required',
        ]);

        LevelModel::create([
            'level_kode' => $request->levelKode,
            'level_nama' => $request->namaLevel,
        ]);
        return redirect('/level');
    }

    public function edit($id)
    {
        $level = LevelModel::find($id);
        return view('level.edit', ['data' => $level]);
    }

    public function update($id, Request $request)
    {
        $level = LevelModel::find($id);

        $level->level_kode = $request->levelKode;
        $level->level_nama = $request->namaLevel;

        $level->save();

        return redirect('/level');
    }

    public function delete($id)
    {
        $level = LevelModel::find($id);
        $level->delete();

        return redirect('/level');
    }
}
