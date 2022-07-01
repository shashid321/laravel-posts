<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Posts</h1>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->status}}</td>
                    <td>
                    <!-- /show/3 -->
                        <!-- <a href="{{url('/show/'.$post->id)}}">show</a> -->
                        <a href="{{ route('post.show', ['id' => $post->id])}}">show</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>