<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
</head>
<body class="antialiased">
    <!-- <form action="{{ url('/login') }}" method="post"> -->
        <form action="/login" method="post">
       @csrf
     
    
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" required><br>
       
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">Submit</button>
    </form>
    <h1>Do you have an account? 
        <button>sign up</button>
       
    </h1>
</body>
</html>
