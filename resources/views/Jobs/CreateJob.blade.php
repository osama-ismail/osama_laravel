<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(Session::has('errors'))
        @foreach(Session::get('errors')->all() as $error)

        <h5 style="color:red">{{$error}}</h5>
        @endforeach

    @endif

    <form method="post" action="{{route('job.store')}}">
    @csrf  
        <input type="text" name="title" placeholder="Job title" id=""><br>
        <textarea name="body" id="" placeholder="Job body" cols="30" rows="10"></textarea><br>
        <input type="number" name="salary" placeholder="salary" id=""><br>
        <button type="subit">add job</button>
    </form>
</body>
</html>