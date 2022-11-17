<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$todo->title}}</title>
</head>
<body style="background-color: black; color: white">
    <h1 style="text-align: center; font-size: 50px">ToDo</h1>
    <div >
        <table >
            
            <tbody>
                
                <tr>
                    <td>
                        <h3>{{$todo->title}}</h3>
                    </td>
                    <td>{{$todo->description}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td><a href="/todo"> вернуться... </a></td>
                </tr>
             
            </tbody>
        </table>
    </div>
</body>
</html>