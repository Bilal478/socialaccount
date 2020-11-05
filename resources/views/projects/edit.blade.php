<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/projects/{{$project->id}}" method="POST">
    @method('PATCH')
    @csrf

    <input type="text"  name="title" value ="{{$project->title}}" style = "{{$errors->has('title')? 'border-color:#ff0f2f' : 'background:#fff7f9'}}">
    <input type="text"  name="description" value ="{{$project->description}}" style = "{{$errors->has('description')? 'border-color:#ff0f2f' : 'background:#fff7f9'}}">
    <input type="submit" value="Update">
    </form>

    <form action="/projects/{{$project->id}}" method="POST">
    @method('DELETE')
    @csrf

    <input type="submit" value="Delete">
    </form>

    @foreach($errors->all() as $error)
       <li>{{$error}}</li>
        @endforeach
</body>
</html>