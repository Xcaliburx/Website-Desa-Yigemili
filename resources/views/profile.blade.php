<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Profile Desa</title>
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

        .inside{
            width: 55rem;
            background-color:cyan;
            border-radius: 10px;
            margin: auto;
            padding-top: 2rem;
            padding-bottom: 2rem;
            padding-right: 2rem;
            padding-left: 2rem;
        }

        .output h1{
            text-align: center;
        }

        .output h2{
            text-align: center;
        }

        .output h3{
            text-align: center;
        }

        .content{
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <a href="/">Back</a>
    @foreach ($profiles as $profile)
        <div class="output">
            <div class="inside">
                <div class="content">
                    <h1>Visi</h1>
                    <h1>{{$profile->visi}}</h1>
                </div>
                <div class="content">
                    <h2>Misi</h2>
                    <h2>{{$profile->misi}}</h2>
                </div>
                <div class="content">
                    <h3>Gambaran Umum</h3>
                    <h3>{{$profile->gambaran_umum}}</h3>
                </div>
                <div class="content">
                    <h3>Sejarah</h3>
                    <h3>{{$profile->sejarah}}</h3>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>