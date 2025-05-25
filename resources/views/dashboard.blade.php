{{-- resources/views/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Lost & Found</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 40px; }
        h1 { color: maroon; }
        .container { max-width: 900px; margin: auto; }
        .laporan { margin-top: 20px; }
        .laporan-item { background: white; padding: 15px; border-radius: 10px; margin-bottom: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halo, {{ $user->name }}</h1>
        <p>Ini profil kamu di Lost & Found Telkom University.</p>

        <button onclick="location.href='{upload.form}'">+ Tambah Laporan Barang</button>

        <div class="laporan">
            <h2>Daftar Laporan Barangmu:</h2>

            @if($laporan->isEmpty())
                <p>Belum ada laporan barang nih.</p>
            @else
                @foreach($laporan as $item)
                    <div class="laporan-item">
                        <strong>Nama Barang:</strong> {{ $item->namaBarang }}<br>
                        <strong>Kategori:</strong> {{ $item->kategoriBarang }}<br>
                        <strong>Lokasi Ditemukan:</strong> {{ $item->lokasiNemu }}<br>
                        <img src="{{ asset('data_file/'.$item->fileFoto) }}" alt="Foto Barang" style="max-width: 200px; margin-top: 10px;">
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>
