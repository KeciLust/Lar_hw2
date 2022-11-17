<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TodoS</title>
</head>

<body style="background-color: black; color: white">
    <h1 style="text-align: center; font-size: 50px">ToDoS</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Заголовок</th>
                    <th>Подробности</th>
                    <th>Дата</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                <tr>
                    <td>
                        <h3>{{$todo->title}}</h3>
                    </td>
                    <td>{{$todo->description}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td><a href="/todo/{{$todo->id}}"> Перейти... </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/todo/create">Добавить...</a>
    </div>
</body>

</html>