<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
</head>

<body>
    @component('components.navbar.navbar')
    @endcomponent
    <h1>Ovde se mozete registrovati</h1>
    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="form-control">
            <div class="box">
                <label for="ime">Ime: </label>
                <input name="ime" type="text" value="{{old('ime')}}" placeholder="Unesi ime">
                @error('ime')
                    <br>
                    <p class="greska" style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="box">
                <label for="prezime">Prezime: </label>
                <input name="prezime" type="text" value="{{old('prezime')}}" placeholder="Unesi prezime">
                @error('prezime')
                    <br>
                    <p class="greska" style="color: red;">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-control">
            <label for="mejl">Mejl: </label><br>
            <input name="email" type="text" value="{{old('email')}}" placeholder="Unesi email">
            @error('email')
                <br>
                <p class="greska" style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-control">
            <label for="sifra">Sifra: </label><br>
            <input name="password" type="password" placeholder="Unesi sifra">
            @error('password')
                <br>
                <p class="greska" style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-control">
            <label for="sifraRepeat">Ponovljena Sifra: </label><br>
            <input name="password_confirmation" type="password" placeholder="Ponovi sifru">
            @error('password_confirmation')
                <br>
                <p class="greska" style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Registruj se</button>
        <button type="button" onclick="obrisiPodatke()">Obrisi podatke</button>
    </form>
    <script>
        function obrisiPodatke() {
            //console.log(document.querySelectorAll('input'));
            inputFields = document.querySelectorAll('input');
            for(i = 1; i < inputFields.length; i++) {
                inputFields[i].value = "";
            }
        }
    </script>
</body>

</html>
