<!DOCTYPE html>
<html lang="pt">
<head>
    <title>PixelWeb</title>
    <link rel="stylesheet" href="{{asset('css/MainPage.css')}}">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">PixelWeb</h2>
            </div>

        </div>


        <div class="content">
            <h1>PixelWeb <br><span>Gaming Mania</span> <br>Website</h1>
            <p class="par">
                <br>Um gamer sempre aprende que para cada derrota, há sempre uma nova chance. O fim é
                <br> apenas o recomeço. Eu não escolhi ser gamer, foi Gaming que me escolheu. E quem
                <br> fala que gamers não tem amigo é porque nunca jogou uma partida online.</p>





    <div class="form">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login Here</h2>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email')}}" required autofocus>



            <input type="password"  id="password" name="password" placeholder="Senha" required>




          <button type="submit" class="btnn"><a>Login</a></button>


          <p class="link">Não tens conta? <br>
            <a href="{{ route('register') }}">Regista-te  </a> aqui</a></p>


        </form>


    </div>




                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
