<table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>counter</th>
            <th>accept</th>
        </tr>
@foreach ($tasks as $task )
        <tr>
            <td>{{$task->id}}</td>
            <td><a href="/plusc?id={{$task->id}}">{{$task->name}}</a></td>
            <td>{{$task->counter}}</td>
            <td><a href="/accept?id={{$task->id}}">принять в работу</a></td>
        </tr>
@endforeach
    </table>