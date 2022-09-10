<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- @if(Session::has('done'))
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

    @endif -->
    <form method="post" action="{{route('user.update1')}}">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{$department->id}} " name="id" id=""><br>

        <input type="text" value="{{$department->password}} " name="name"  id=""><br>
        <input type="text" name="password" value="{{$department->password}}"
         id="" cols="30" rows="10">
        <button type="submit">edit</button>
    </form>

</body>
</html>