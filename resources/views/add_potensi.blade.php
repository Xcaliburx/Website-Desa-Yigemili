<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Add Potensi</title>
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
            padding-top: 2rem;
            margin-top: 5rem;
        }

        .submit{
            margin-left: 14.8rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .file{
            background-color: tomato;
            border: none;
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
    <h1 class="title">Input Potensi</h1>
    <form class="input" action="{{route('potensi.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Foto</label>
          <input type="file" name="foto_potensi" class="form-control file" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama_potensi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Deskripsi</label>
          <input type="text" name="deskripsi_potensi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>
</body>
</html>