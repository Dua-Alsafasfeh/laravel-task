<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop</title>
</head>
<body>
    <form action="{{ url('add-data') }}" method="post">
        @csrf
        title<input type="text" name="title">
        body<input type="text" name="body">
        <button type="submit">Add</button>
    </form>

    @if (session('status'))
    <p>{{session('status')}}</p>       
    @endif
    <a href="{{url('add-data')}}">Add Data</a>
    @foreach ($data as $item)
        <ul>
            <li>{{$item->id}}</li>
            <li>{{$item->title}}</li>
            <li>{{$item->body}}</li>
            <li><a href="{{ url('delete-data/id/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a></li>
            <li><a href="{{ url('edit-data/id/'.$item->id) }}" class="btn btn-danger btn-sm">Edit</a></li>

        </ul>
    @endforeach
    <td>
        
    </td>

    <form action="{{url('update-data/id/'.$editor->id)}}" method="post">
        @csrf
        @method('put')
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{$editor->title}}">
        <label for="body">body</label>
        <input type="text" id="body" name="body" value="{{$editor->body}}">
        <button type="submit">update</button>
    </form>
</body>
</html>