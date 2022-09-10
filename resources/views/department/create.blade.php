<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(Session::has('done'))
    <h4> {{Session::get('done')}}</h4>
    @endif

    @if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>
    {{$error}}
    </li>
    @endforeach
    </ul>

    @endif
    <form method="post" action="{{route('department.store')}}">
        @csrf
        <input type="text" name="name" placeholder="enter name" id=""><br>
        <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>
        <button type="submit">add</button>
    </form>
</body>
</html>