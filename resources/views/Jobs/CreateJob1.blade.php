<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('job.store1')}}">
    @csrf  
        <input type="text" name="title" placeholder="Job title" id=""><br>
        <textarea name="body" id="" placeholder="Job body" cols="30" rows="10"></textarea><br>
        <input type="number" name="salary" placeholder="salary" id=""><br>
        <button type="subit">osama</button>
    </form>
</body>
</html>