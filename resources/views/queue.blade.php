<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue</title>
</head>
<body>

<table>
    <tr>
        <th>id</th>
        <th>task_id</th>
        <th>status</th>
        <th>added_on</th>
    </tr>
    @foreach($logs as $log)
    <tr>
        <td>{{$log->id}}</td>
        <td>{{$log->task_id}}</td>
        <td>{{$log->status}}</td>
        <td>{{$log->added_on}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>