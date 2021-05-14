<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('post.user')}}" method="POST">
        @csrf
        <input type="text" name="name" id="" placeholder="Name">
        <input type="text" name="email" id="" placeholder="email">
        <input type="text" name="password" id="" placeholder="password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>