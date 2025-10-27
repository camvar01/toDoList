<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación To Do List</title>

</head>
<body>
    <form action="{{ url('/') }}" method="post">
        @csrf
        <input type="text" name="task" id="task" placeholder="Escribe una tarea">
        <input type="submit" value="Agregar tarea">
       
    </form>
<br>
    <table border="1">
        <tr>
            <th>Nombre de la tarea</th>
            <th>Acción</th>
        </tr>

    @foreach ($tasks as $task)

        <tr>
            <td>{{ $task->task }}</td>
            <td>
                <form action="{{ route('task.destroy', $task->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="x">
                </form>
            </td>
        </tr>
    @endforeach
</body>
</html>
