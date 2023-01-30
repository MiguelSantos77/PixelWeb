


<!DOCTYPE html>
<html lang="pt">
<head>
    <title>PixelWeb</title>
    <link rel="stylesheet" href="{{ asset('css/paginaJogos.css') }}">


    <style>


        .meio{
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

    <div class="main">
        <div class="navbar">
            <div class="menu">
                <ul>
                    <li> <div class="icon">
                        <h2 class="logo">PixelWeb</h2>
                    </div></li>


                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endguest
                    @auth

                    <li><a style="color: #ff7200; " href="{{ route('games.create') }}">ADDGAME</a></li>
                    <li><a href="{{ route('games.show', Auth::id())}}">MYGAMES</a></li>
                    <li><a href="{{ url('/logout') }}">LOGOUT</a></li>
                    @endauth
                </ul>
            </div>
        </div>

        @auth


        <div class="meio">


    <h1>Regras </h1><br><p>- o ficheiro html principal deve ser chamdo de "index"
        <br>
        - todos os ficheiros deverão estar fora de pastas
    </p>
<br>
    <form action="{{ route('games.store') }}" enctype="multipart/form-data"  method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" >
<br>
        <label for="imagem">Imagem do Jogo</label>


        <input type="file" id="imagem" name="imagem">
        <br>
        <label for="ficheiros">Ficehiros do jogo WEB</label>
        <input type="file" name="attachment[]" multiple>

        <button type="submit"  class="btn btn-primary">Save</button>
    </form>


        </div>


        @endauth



    </div>



</body>
</html>
