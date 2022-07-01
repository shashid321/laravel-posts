<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('submit.post')}}" method="post">
        @csrf
        <input type="text" name="name">
        @error('name') <span style="color:red">{{$message}}</span> @enderror
        <input type="text" name="description">
        @error('description') <span style="color:red">{{$message}}</span> @enderror
        <button>Submit</button>
    </form>
</body>
</html>