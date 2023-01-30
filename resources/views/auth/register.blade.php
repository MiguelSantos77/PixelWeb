
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
          <h1>Registo</h1>

          <form  method="POST" action="{{ route('register') }}">
            @csrf
          <input type="text" placeholder="Nome" id="name" name="name"  required autofocus>
          <br><br>
          <input type="email" placeholder="Email"  id="email"name="email"  required>
          <br><br>
          <input type="password" placeholder="Password"  id="password" name="password" required>
          <br><br>
          <input type="password" placeholder="Password confirmar" id="password_confirmation" name="password_confirmation" required>
          <br><br>
          <button type="submit">Registar</button>
            

        </form>
      </div>
  </body>
  </html>




  @endguest
