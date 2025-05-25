<!-- resources/views/upload.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Upload Barang Hilang</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            border: 2px solid #800000; /* maroon border */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(128, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #800000;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #800000;
        }

        input[type="text"],
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #800000;
            border-radius: 5px;
        }

        button {
            background-color: #800000;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #a00000;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .error {
            color: #a94442;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Upload Laporan Barang Ditemukan</h2>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/proses-upload') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="kategoriBarang">Kategori Barang</label>
        <select name="kategoriBarang" id="kategoriBarang">
            <option value="">-- Pilih Kategori --</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Dompet">Dompet</option>
            <option value="Kunci">Kunci</option>
            <option value="Lainnya">Lainnya</option>
        </select>
        @error('kategoriBarang')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="namaBarang">Nama Barang</label>
        <input type="text" name="namaBarang" id="namaBarang" placeholder="Contoh: HP Vivo Y12">
        @error('namaBarang')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="lokasiNemu">Lokasi Ditemukan</label>
        <input type="text" name="lokasiNemu" id="lokasiNemu" placeholder="Contoh: Parkiran Kampus">
        @error('lokasiNemu')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="fileFoto">Upload Foto Barang</label>
        <input type="file" name="fileFoto" id="fileFoto">
        @error('fileFoto')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Kirim Laporan</button>
    </form>
</div>

</body>
</html>
