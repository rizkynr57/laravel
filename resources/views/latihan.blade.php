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
        <legend>Passing Data From Controller to View</legend>
        @foreach ($data as $siswa)
            {{$siswa['nama']}} #
            {{$siswa['kelas']}}<hr>
        @endforeach
    </fieldset>
</body>
</html>
