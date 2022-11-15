<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
</head>
<body>
    <h2>Edit todo</h2>
    <form action="{{route('updateTodo')}}" method="post">
        @csrf 
        <input type="hidden" name="id" value="{{$eutadata->id}}">
        <input type="text" name="todo" value="{{$eutadata->title}}">
        <button type="submit">Update</button>
    </form>
</body>
</html>