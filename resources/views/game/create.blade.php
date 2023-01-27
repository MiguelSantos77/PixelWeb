<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>



    <form action="{{ route('games.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" >

        <button type="submit"  class="btn btn-primary">gravar</button>
    </form>
</body>
</html>
