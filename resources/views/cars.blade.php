<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <h1>Cars:</h1>
            @foreach ($cars as $car)
               <a href="/cars/{{$car->id}}"> <li>{{$car->title}}</li></a>
            @endforeach
        </ul>
    </div>
</body>
</html>