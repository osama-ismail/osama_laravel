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
    <table border=1>

        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>delete</th>
            <th>edit</th>
        </tr>   
        @foreach($departments as $department)

        <tr>
            <td>{{$department->id}}</td>
            <td>{{$department->name}}</td>
            <td>{{$department->email}}</td>

            <td>
            <form method="post" action="{{route('user.delete')}}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$department->id}}">
            <button type="submit">delete</button>

            </form>
            <!-- <a href="{{route('department.delete',['id' => $department->id])}}">delete</a> -->
        </td>
        <td>
        <form method="post" action="{{route('user.edit',$department->id)}}">
                @csrf
                @method('GET')
                <!-- <input type="hidden" name="department_id" value="{{$department->id}}"> -->
            <button type="submit">EDIT</button>

            </form>
            <!-- <a href="{{route('department.update',$department->id)}}">edit</a> -->
        </td>
        </tr>   

        @endforeach





    </table>
</body>
</html>