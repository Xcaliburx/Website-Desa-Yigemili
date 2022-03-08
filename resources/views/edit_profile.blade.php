<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Edit Profile</title>
    <style>
        html, body{
            background-color: #12343b;
            width: 100%;
            height: 100%;
        }

        .form-group{
            margin: auto;
            display: flex;
            flex-direction: column;
            margin-top: 1rem;
        }

        .form-control{
            width: 30rem;
            margin: auto;
        }

        .form-group label{
            margin-left: auto;
            margin-right: auto;
            font-size: 1.5rem;
        }

        .submit{
            margin-left: 17.6rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .input{
            width: 40rem;
            margin: auto;
            background-color:tomato;
            border-radius: 10px;
            padding-top: 2rem;
            margin-top: 5rem;
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
    <h1 class="title">Edit Profile</h1>
    <form class="input" action="{{route('profile.update', $profile->id)}}" method="POST">
        @csrf
        @method('PATCH');
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Visi</label> <br>
          <textarea class="form-control" name="profile_visi" id="exampleFormControlTextarea1" rows="4" >{{$profile->visi}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Misi</label> <br>
          <textarea class="form-control" name="profile_misi" id="exampleFormControlTextarea1" rows="4" >{{$profile->misi}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Gambaran Umum</label> <br>
          <textarea class="form-control" name="profile_gambaran" id="exampleFormControlTextarea1" rows="4" >{{$profile->gambaran_umum}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Sejarah</label> <br>
          <textarea class="form-control" name="profile_sejarah" id="exampleFormControlTextarea1" rows="4" >{{$profile->sejarah}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>
</body>
</html>