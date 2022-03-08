<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>View Penduduk</title>
    <style>
        html, body{
            background-color: #12343b;
            width: 100%;
            height: 100%;
        }

        .output{
            width: 50rem;
            background-color:tomato;
            border-radius: 10px;
            margin-left: 5rem;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin-bottom: 1rem;
            padding-top: 2rem;
        }

        .title{
            text-align: left;
            font-size: 3rem;
            margin-bottom: 3rem;
            color: #dddddd;
            margin-left: 5rem;
        }
    </style>
</head>
<body>
    <a href="/">Back</a>
    <h1 class="title">List Penduduk</h1>
    <div>
    @foreach ($penduduks as $penduduk)
        <div class="output">
            <div class="data1">
                <p>{{$loop->iteration}}. {{$penduduk->nama_lengkap}}</p>
                <p>NIK : {{$penduduk->nik}}</p>
                <p>No KK : {{$penduduk->no_kk}}</p>
                <p>Alamat : {{$penduduk->alamat}}</p>
                <p>Jenis Kelamin : {{$penduduk->jenis_kelamin}}</p>
            </div>
            <div class="data2">
                <p>Tempat Lahir : {{$penduduk->tempat_lahir}}</p>
                <p>Tanggal Lahir : {{$penduduk->tanggal_lahir}}</p>
                <p>Agama : {{$penduduk->agama}}</p>
                <p>Pekerjaan : {{$penduduk->pekerjaan}}</p>
                <p>Pendidikan : {{$penduduk->pendidikan}}</p> <br>
            </div>
        </div>
    @endforeach
</body>
</html>