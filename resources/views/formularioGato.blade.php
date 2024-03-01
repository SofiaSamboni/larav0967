<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>formulario Gato</h1>
    <form action="{{route('gato.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
            Ingrese el nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Ingrese la raza
            <br>
            <input type="text" name="raza">
        </label>
        <br><br><br>
       
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>