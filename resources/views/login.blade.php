<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    @component('components.navbar.navbar')
    @endcomponent
    <h1>Ovde se mozete logovati</h1>
    
    <form action="user" method="post">
        @csrf
        <div class="form-control">
            <label for="mejl">Mejl: </label><br>
            <input name="username" value="{{old('username')}}" type="text" placeholder="Unesi mejl">
            @error('username')
                <br><p class="greska" style="color: red;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-control">
            <label for="mejl">Sifra: </label><br>
            <input name="namepassword" type="password" placeholder="Unesi sifru">
            @error('namepassword')
                <br><p class="greska" style="color: red;">{{$message}}</p>
            @enderror
        </div>
        <button type="submit">Log in</button>
    </form>
</body>
</html>