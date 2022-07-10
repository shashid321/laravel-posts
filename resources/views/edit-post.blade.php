<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.update', ['id' => $post->id])}}" method="post">
        @method('put')
        @csrf
        <input type="text" name="name" value={{$post->name}}>
        @error('name') <span style="color:red">{{$message}}</span> @enderror
        <input type="text" name="description" value={{$post->description}}>
        @error('description') <span style="color:red">{{$message}}</span> @enderror
        <button>Submit</button>
    </form>
</body>
</html>