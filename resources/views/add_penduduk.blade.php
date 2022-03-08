<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Input Penduduk</title>
    <style>
        html, body{
            background-color: #12343b;
            width: 100%;
            height: 100%;
        }

        .form-control{
            width: 30rem;
            margin: auto;
        }

        .form-group{
            margin: auto;
            display: flex;
            flex-direction: column;
            margin-top: 1rem;
        }

        .form-group label{
            margin-left: auto;
            margin-right: auto;
        }

        .input{
            width: 35rem;
            margin: auto;
            background-color:tomato;
            border-radius: 10px;
            padding-top: 1rem;
        }

        .submit{
            margin-left: 14.8rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .title{
            text-align: center;
            font-size: 3rem;
            margin-bottom: 3rem;
            color: #dddddd;
        }
    </style>
</head>
<body>
    <a href="/home">Back</a>
    <h1 class="title">Input penduduk</h1>
    <form class="input" action="{{route('penduduk.store')}}" method="POST">
         @csrf
         <div class="form-group">
            <label for="exampleInputEmail1">NIK</label>
            <input type="number" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">No KK</label>
            <input type="number" name="no_kk" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option selected>Choose...</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <select name="agama" class="form-control">
                <option selected>Choose...</option>
                <option>Katolik</option>
                <option>Kristen</option>
                <option>Islam</option>
                <option>Budha</option>
                <option>Hindu</option>
                <option>Konghucu</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Pendidikan</label>
            <select name="pendidikan" class="form-control">
                <option selected>Choose...</option>
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
                <option>D3</option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
                <option>Tidak Bersekolah</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>
</body>
</html>