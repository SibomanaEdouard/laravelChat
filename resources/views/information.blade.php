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
<h1>My Information</h1>
    <p>Firstname: {{ $user->firstname }}</p>
    <p>Lastname:{{$user->lastname}}</p>
    <p>Email: {{ $user->email }}</p>
    <img src={{$user->image_url}} alt="My profile"/>
    <button id="updateButton" type="submit">Update</button>
    <button id="deleteButton" type="submit">Delete</button>
    <script>

    document.getElementById("updateButton").addEventListener('click',function(event){
        event.preventDefault();
        window.location.href="/update";
    })
    document.getElementById("deleteButton").addEventListener('click',function(event){

        if (confirm('Are you sure you want to delete your data?')) {
            // Send the request to the backend api
            fetch('/delete', {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Data deleted successfully
                    alert('User data deleted successfully.');
                  window.location.href='/signup'
                } else {
                    // Handle error case
                    alert('Failed to delete user data.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while deleting user data.');
            });
        }
    
    })
    </script>
</body>
</html>
