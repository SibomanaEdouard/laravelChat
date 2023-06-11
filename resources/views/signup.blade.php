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
    <form action="{{ url('/users') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="firstname">FirstName</label><br>
        <input type="text" name="firstname" id="firstname" required><br>
        <label for="lastname">LastName</label><br>
        <input type="text" name="lastname" id="lastname" required><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="phone">Phone</label><br>
        <input type="tel" name="phone" id="phone" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br>
        <label for="photo">Add photo</label><br>
        <input type="file" name="image" id="image" required><br>

        <button type="submit">Submit</button>
    </form>
    <h1>Do you have an account? 
        <button>Login</button>
        <button type="submit">Home</button>
    </h1>
</body>
</html>
