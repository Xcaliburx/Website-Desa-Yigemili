<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>View Potensi</title>
    <style>
        html, body{
            background-color: #12343b;
            width: 100%;
            height: 100%;
        }

        .output{
            width: 65rem;
            background-color:tomato;
            border-radius: 10px;
            margin: auto;
            margin-top: 3rem;
            padding-top: 3rem;
            padding-bottom: 3rem;
            padding-right: 3rem;
            padding-left: 3rem;
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
    <a href="/">Back</a>
    <h1 class="title">List Potensi</h1>
    <div class="output">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($potensis as $potensi)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{'storage/images/'.$potensi->foto_potensi}}" style="height:300px" alt=""></td>
                    <td>{{$potensi->nama_potensi}}</td>
                    <td>{{$potensi->deskripsi_potensi}}</td>
                  </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</body>
</html>