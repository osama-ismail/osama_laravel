<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('user.check')}}">
@csrf
<h2>Sign In page</h2>
<h4>you can sign in as an employee or an admin</h4>
<input type="text" name="user" id="" placeholder="enter your name"><br>
<input type="password" name="password" id="" placeholder="enter your password">
<button type="submit">Login</button>
</form>
</body>
</html>