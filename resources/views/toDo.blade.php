<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>View File</title>
</head>
<body>
<h2>ToDo App</h2>
<form action="/todo/create">
    <input type="text" name="title" />
    <input type="submit" value="Create" />
</form>
<ul>
    @foreach($todoData as $todoItem)
        <li>
        @if($todoItem['completed'])
            <s>{{ $todoItem['title'] }}</s>
        @else
            {{ $todoItem['title'] }}
        @endif
            <form action="/todo/{{ $todoItem['id'] }}/toggle"><input type="submit" value="Toggle" /></form>
            <form action="/todo/{{ $todoItem['id'] }}/delete"><input type="submit" value="Delete" /></form>
        </li>

    @endforeach
</ul>
</body>
</html>
