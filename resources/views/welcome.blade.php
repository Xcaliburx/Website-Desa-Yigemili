<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        html, body{
            background-color: #12343b;
            width: 100%;
            height: 100%;
        }

        .navbar{
            height: 4rem;
        }

        .navbar-brand{
            margin-left: 2rem;
        }

        .output{
            width: 80rem;
            background-color:tomato;
            border-radius: 10px;
            margin: auto;
            margin-top: 3rem;
            margin-bottom: 3rem;
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .output h1{
            text-align: center;
            margin-bottom: 3rem;
            color: #dddddd;
        }

        .navbar-nav{
            margin-top: 2rem;
            margin-left: 5rem;
            font-size: 1.3rem;
        }

        .nav-item{
            margin-left: 3rem;
        }

        .gambar{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 2rem;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" style="color: #dddddd; font-size: 1.5rem;" href="#">Lanny Jaya</a>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-auto">
                    <a class="nav-link" style="color: #dddddd;" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #dddddd;" href="{{route('profile.view')}}">Profile</a> <br>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #dddddd;" href="{{route('potensi.view')}}">Potensi</a> <br>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #dddddd;" href="{{route('penduduk.view')}}">View Penduduk</a> <br>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #dddddd;" href="{{route('produk.view')}}">View Produk</a> <br>
                </li>
          </ul>
        </div>
    </nav>
    <div class="output">
        <h1>Selamat Datang di Desa Yigemili</h1>
        <h1>Kabupaten LANIJAYA PAPUA</h1>
    </div>
    <img class="gambar" src="img/Screenshot_21.jpg" alt="">
</body>
</html>