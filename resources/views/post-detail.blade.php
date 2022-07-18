<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$post->name}}</h1>
    <p>{{$post->description}}</p>
    <span>{{$post->status}}</span>


    <form action="{{route('comment', ['id' => $post->id])}}" method="post">
        <input type="hidden" name="post_id" value={{$post->id}}>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <button>Submit</button>
    </form>

    <h2>Comments</h2>
    @foreach($post->comments as $comment)
    
    
</body>
</html>
