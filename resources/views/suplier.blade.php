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
        <legend>Data Suplier</legend>
            @foreach ($suplier as $data)
                Nama : {{$data->nama}}<br>
                Alamat : {{$data->alamat}}<br>
                Kode Pos : {{$data->kode_pos}}<br>
                Kota : {{$data->kota}}<hr>
            @endforeach

    </fieldset>
</body>
</html>
