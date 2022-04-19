<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts List</title>
</head>
<body>
<h1>Posts List : </h1>
@foreach ($posts_list as $post)
    <P>

        <ul>
            <li>
                Post Id : {{ $post->id }}
            </li>
            <li>
                Post Title : {{ $post->title }}
            </li>
            <li>
                Post Body : {{ $post->body }}
            </li>
        </ul>
    </P>
@endforeach
</body>
</html>