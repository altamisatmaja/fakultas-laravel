<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakultas</title>
</head>
<body>
    <p>Hai {{ $nama ?? '' }}, {{ $nim ?? '' }} </p>
    <p> {{ session('success') }} </p>
    {{-- <form action="/fakultas/tambah"> --}}
    <form action="{{ route('fakultas.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama mahasiswa</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="nim">NIM mahasiswa</label>
            <input type="text" name="nim">
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>