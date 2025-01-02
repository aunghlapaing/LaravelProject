<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | UOS</title>
</head>
<body>
    <h1>This is UOS Page</h1>
    <hr>
    <form action="{{ url('userData') }}" method="post">
        @csrf
        {{-- <input type="text" name="token" value="{{ csrf_token() }}" id=""> --}}
        <input type="text" name="uos" placeholder="Enter name...">
        <input type="text" name="classno" placeholder="Enter class number...">
        <input type="submit" name="btn_submit" id="" value="send data">
    </form>
    
</body>
</html>