<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reg view</title>
</head>
<body>
<form action="/done" method="post">
    @csrf
    <input name="login" type="text" placeholder="login"><br>
    <input name="password" type="text" placeholder="password"><br>
    <input type="submit">
</form>
</body>
</html>