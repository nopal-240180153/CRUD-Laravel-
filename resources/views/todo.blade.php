<!DOCTYPE html>
<html>
<head>
    <title>CRUD To-Do List</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 50px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; display: inline-block; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        table { margin-top: 20px; border-collapse: collapse; width: 100%; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        button { cursor: pointer; background: #28a745; color: white; border: none; padding: 5px 10px; border-radius: 3px; }
        .btn-hapus { background: #dc3545; color: white; text-decoration: none; padding: 5px 10px; border-radius: 3px; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Tugas Saya</h2>

        <form action="/tambah" method="POST">
            @csrf
            <input type="text" name="tugas" placeholder="Ketik tugas baru..." required>
            <button type="submit">Tambah</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Daftar Tugas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tbody>
    @foreach($semua_tugas as $t)
    <tr>
        <td>
            <form action="/update/{{ $t->id }}" method="POST" style="display: flex; gap: 5px;">
                @csrf
                <input type="text" name="nama_baru" value="{{ $t->nama_tugas }}" style="border: none; border-bottom: 1px solid #ccc;">
                <button type="submit" style="background: #007bff; font-size: 10px;">Simpan</button>
            </form>
        </td>
        <td>
            <a href="/hapus/{{ $t->id }}" class="btn-hapus">Hapus</a>
        </td>
    </tr>
    @endforeach
</tbody>
            </tbody>
        </table>
    </div>
</body>
</html>