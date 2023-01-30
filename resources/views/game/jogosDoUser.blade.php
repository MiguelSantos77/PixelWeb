


<!DOCTYPE html>
<html lang="pt">
<head>
    <title>PixelWeb</title>
    <link rel="stylesheet" href="{{ asset('css/paginaJogos.css') }}">
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

                    <li><a href="{{ route('games.create') }}">ADDGAME</a></li>
                    <li><a style="color: #ff7200; " href="{{ route('games.show', Auth::id()) }}">MYGAMES</a></li>
                    <li><a href="{{ url('/logout') }}">LOGOUT</a></li>
                    @endauth
                </ul>
            </div>
        </div>


        <div class="game1">






                @php
                    $cont=0;
                @endphp

                @foreach ($jogos as $jogo )


                @if(Auth::id()== $jogo->user_id)


                @if($cont==0)


                      <table>
                    <tr>

                @endif


                    <td>
                        <a href="{{ asset('userGames/'.$jogo->name    .$jogo->user_id. '/game/index.html') }}">  <img class="img1" src="{{ asset('userGames/'.$jogo->name    .$jogo->user_id.'/'.$jogo->nomeImagem)}}">  </a>

                        <a href="{{ route('games.destroy', $jogo->id) }}" style="color: red; text-decoration: none; ">Eliminar</a>
                    </td>


                    @php
                        $cont++;
                    @endphp
                    @if($cont==4)


                              </tr>
                        </table>


                        @php
                        $cont=0;
                    @endphp
                    @endif


                    @endif

                @endforeach

            </div>
        </div>
    </div>



</body>
</html>
