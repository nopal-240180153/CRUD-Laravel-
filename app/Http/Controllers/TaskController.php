<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tugas = DB::table('tasks')->get();
        return view('crud', ['semua_tugas' => $tugas]);
    }

    public function tambah(Request $request)
    {
        DB::table('tasks')->insert([
            'nama_tugas' => $request->tugas,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back();
    }

    public function hapus($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return back();
    }

    public function update(Request $request, $id)
    {
        DB::table('tasks')->where('id', $id)->update([
            'nama_tugas' => $request->nama_baru,
            'updated_at' => now(),
        ]);

        return back();
    }
}
