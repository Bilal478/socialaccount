<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="content">
                <div class="title m-b-md">
                @foreach($projects as $project)
                   <li>{{$project->title}}</li> 
                    @endforeach
                </div>
</div>
</body>
</html>