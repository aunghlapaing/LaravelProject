<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel || Home Page</title>
</head>
<body>
    <h1>Laravel Home Page</h1>
    <hr>

    {{-- route manual --}}
    <a href="../views/classroom/fcd.blade.php">Go to FCD class room</a>

    {{-- laravel power route --}}
    <a href="{{ url('FCD') }}">Go to FCD class room</a>

    {{-- asset refer to public / laravel power --}}
    <img src="{{ asset('/image/userProfile.png') }}" alt="">
    
</body>
</html>