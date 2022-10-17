<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('store')}}" method="POST">
    <label for="fullname">Fullname</label>
    <input type="text">
    <label for="address">Address</label>
    <input type="text">
    <label for="">Birthday</label>
    <input type="date">
    <input type="submit" value="Add">
</form>
</body>
</html>