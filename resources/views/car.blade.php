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
        <h1>{{$cars->title}}</h1>
        <p>Produced by {{$cars->producer}}
        </p>
        <p>Door number is {{$cars->number_of_doors}}</p>
    </div>
</body>
</html>