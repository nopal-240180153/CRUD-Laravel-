<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// 1. Menampilkan Halaman Utama & Data (Read)
Route::get('/', function () {
    $tugas = DB::table('tasks')->get();
    return view('todo', ['semua_tugas' => $tugas]);
});

// 2. Menambah Tugas Baru (Create)
Route::post('/tambah', function (Request $request) {
    DB::table('tasks')->insert([
        'nama_tugas' => $request->tugas,
        'created_at' => now(),
        'updated_at' => now()
    ]);
    return back();
});

// 3. Menghapus Tugas (Delete)
Route::get('/hapus/{id}', function ($id) {
    DB::table('tasks')->where('id', $id)->delete();
    return back();
});

// 4. UPDATE DATA (Ganti Nama Tugas)
Route::post('/update/{id}', function (Request $request, $id) {
    DB::table('tasks')->where('id', $id)->update([
        'nama_tugas' => $request->nama_baru,
        'updated_at' => now()
    ]);
    return back();
});