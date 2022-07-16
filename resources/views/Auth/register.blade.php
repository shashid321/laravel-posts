<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- User -->
<body>
    <form method="post" action={{route('register.store')}}>
        @csrf
        <!-- <input type="hidden" name="role" value="2"> -->
        <input type="text" name="name" placeholder="Name">
        @error ('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
       <input type="email" name="email" placeholder="Email">
       @error ('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
       <input type="password" name="password" placeholder="Password">
       @error ('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
       <input type="password" name="password_confirmation" placeholder="Confirm Password">
       @error ('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
       <input type="submit" value="Submit">
</body>
</html>


