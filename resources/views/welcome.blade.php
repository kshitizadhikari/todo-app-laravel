<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
    <title>Document</title>
    <style>
        .header{
            display: flex;
            align-items: center;
            justify-content: center;
            padding:50px;

        }

        .formko{
            display:flex;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>TODO APPLICATION</h2>   
    </div>
    <div class="formko">
        <form action="{{route('saveTodo')}}" method="post">
            @csrf
            <label for="todo">Enter your todo</label>
            <input type="text" name="todo">
            <button type="submit">submit</button>
        </form>
    </div>

    
    <div class="tableko">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            
            @foreach($list as $value)
            <tbody>
                <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->title}}</td>
                <td><a href="{{url('/edit/' . $value->id)}}">Edit</a></td>
                <td><a href="{{url('/delete/' . $value->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>