<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("inscription") }}" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="">
        <input type="text" name="prenom" placeholder="">
        <input type="email" name="email" placeholder="">
        <input type="password" name="password" placeholder="">
        <input type="submit" name="create" placeholder="">
    </form>
</body>
</html>