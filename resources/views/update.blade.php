<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My information</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
</head>
<body class="antialiased">
<h1> Update My Information</h1>
    <form action="/update" method="post" enctype="multipart/form-data">
        @csrf
        <label for="firstname">FirstName</label><br>
        <input type="text" name="firstname" id="firstname" required value="{{ $user->firstname }}"/><br>
        <label for="lastname">LastName</label><br>
        <input type="text" name="lastname" id="lastname" required value="{{ $user->lastname }}"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" required value="{{ $user->email }}"><br>
        <label for="phone">Phone</label><br>
        <input type="tel" name="phone" id="phone" required value="{{ $user->phone }}"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br>
        <label for="photo">Add photo</label><br>
        <input type="file" name="image" id="image" required value="{{ $user->image_url }}"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
