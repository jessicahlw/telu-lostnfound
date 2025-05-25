<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang Ditemukan</title>
</head>
<body>
    <h1>Barang Ditemukan</h1>
    <ul>
        @foreach($items as $item)
            <li>
                <strong>{{ $item->item_name }}</strong> - 
                Ditemukan di {{ $item->location_found }} pada {{ $item->date_found }}
                <br>
                <em>{{ $item->description }}</em>
            </li>
        @endforeach
    </ul>
</body>
</html>
