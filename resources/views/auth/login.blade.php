


@guest


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel WEB</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            height: 100vh;
            background-image: url({{ asset('imgs/register.gif') }});
            background-repeat: no-repeat;
            background-size: 100% 100%;
            margin: 0px;
        }
        div{
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: rgb(159, 1, 159);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }
        button:hover{
            background-color: purple;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <div>
        <h1>Login</h1>



        <form method="POST" action="{{ route('login') }}">
            @csrf

            <br><br>

            <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email')}}" required autofocus>
            <br><br>


            <input type="password"  id="password" name="password" placeholder="Senha" required>

            <br><br>


          <button type="submit" class="btnn"><a>Login</a></button>




        </form>

      </form>
    </div>
</body>
</html>




@endguest

