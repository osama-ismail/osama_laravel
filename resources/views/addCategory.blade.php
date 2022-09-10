<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('category.store')}}">
        @csrf
        <input type="text" name="name" placeholder="name" id="">
        <input type="submit" value="Add ategory">
</form>
</body>
</html>