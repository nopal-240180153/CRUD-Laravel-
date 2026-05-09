<!DOCTYPE html>
<html>
<head>
    <title>CRUD To-Do List</title>
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
                @foreach($semua_tugas as $t)
                <tr>
                    <td>
                        <form action="/update/{{ $t->id }}" method="POST">
                            @csrf
                            <input type="text" name="nama_baru" value="{{ $t->nama_tugas }}">
                            <button type="submit">Simpan</button>
                        </form>
                    </td>
                    <td>
                        <a href="/hapus/{{ $t->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>