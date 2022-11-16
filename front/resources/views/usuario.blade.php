<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>

<body>

    <table>
        <thead>
            <th>id</th>
            <th>nombre</th>
            <th>email</th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario['id']}}</td>
                <td>{{$usuario['nombre']}}</td>
                <td>{{$usuario['email']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
