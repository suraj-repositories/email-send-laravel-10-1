<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Sender</title>
</head>
<body>
    @if (Session::has('success'))
        <hr>
        <small>{{ session('success') }}</small>
        <hr>
    @endif
    
    <form action="{{ route('send-mail') }}" method="POST">
        @csrf
        Email : <input type="email" name="email" id="email">
        @error('email')
            <br><small>{{ $message }}</small>
        @enderror
        <br><br>
        <input type="submit" value="Send Joining Email">
    </form>
    
</body>
</html>