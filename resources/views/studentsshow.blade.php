<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>students</h1>

    <table class="table"> 
        <tr>
            <th> id</th>
            <th> name</th>
            <th> city </th>
            <th> fees</th>
            
        </tr>
        @foreach ($students as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->city}}</td>
            <td>{{$s->fees}}</td>
            
        </tr>

        @endforeach
        
    </table>
</body>
</html>