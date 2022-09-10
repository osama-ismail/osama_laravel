<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('done'))
    <h3>yse {{session('done')}}</h3>
    @endif
    <a href="{{route('job.create')}}"> add new job</a>
    <table border=1>
        <tr>
        <th>id</th>  
          <th>title</th>  
          <th>body</th>  
          <th>salary</th>  
          <th>Action</th> 
        </tr>
        @foreach($jobs as $key=> $job)
        <tr>
        <th>{{++$key}}</th>  
          <th>{{$job->title}}</th>  
          <th>{{$job->body}}</th>  
          <th>{{$job->salary}}</th>  
          <th>
            <form method="post" action="{{route('job.delete')}}">
             @csrf
            <input type="hidden" name="jobId" value="{{$job->id}}">
                <button type="submit">Delete</button>
            </form>

          </th> 
        </tr>
        @endforeach
    </table>
</body>
</html>