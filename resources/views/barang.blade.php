<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Barang</legend>
        <br>
        @foreach ($barang as $data)
            Nama : {{$data->nama}}<br>
            Varian : {{$data->varian}}<br>
            Harga Beli : {{$data->harga_beli}}<br>
            Harga Jual : {{$data->harga_jual}}<hr>
        @endforeach
    </fieldset>
</body>
</html>
