<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/projects" method="POST">
    @csrf

    <input type="text"  name="title" value = "{{old('title')}}" style = "{{$errors->has('title')? 'border-color:#ff0f2f' : 'background:#ffffff'}}"></br></br>
    <input type="text"  name="description" value = "{{old('description')}}" style = "{{$errors->has('description')? 'border-color:#ff0f2f' : 'background:#ffffff'}}"></br></br>
    <input type="submit" value="Create">
    </form>

    @foreach($errors->all() as $error)
       <li>{{$error}}</li>
        @endforeach
</body>
</html>