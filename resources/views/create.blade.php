<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление</title>
</head>

<body>
    <h1>Добавить</h1>
<form action="{{route('/todo')}}" method="post">
    
    <div>
        <label for="title_id">Зоголовок</label>
        <input type="text" name="title" id="title_id">
    </div>
    <div>
        <label for="description_id">Контекст</label>
        <input type="text" name="description" id="description_id">
    </div>
    <input type="submit" value="Добавить">
    
</form>
</body>

</html>