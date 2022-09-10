<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>add an employee</h2>
    <form method="post" action="{{route('user.store')}}">
    @csrf  
<input type="text" name="name" id="" placeholder="enter  employee name">
<input type="text" name="email" id="" placeholder="enter  employee email">
<input type="password" name="password" id="" placeholder="enter  employee password">
<input type="text" name="id_admin" id="" placeholder="enter  employee id_admin">
<button type="submit">Add</button>
    </form>
</body>
</html>
