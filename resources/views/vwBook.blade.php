<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="scss.css">
</head>
<body class="delete">
    <div class="container">
        @foreach($books as $book)
        <div>
            <h1>{{ $book->name }}</h1>
            <form action="/book/{{ $book->id }}" method="post">
                @csrf
                @method('delete')
                <button>Delete</button>
            </form>
            <a href="book/{{$book->id}}/edit">Edit</a>
        </div>
        @endforeach
    </div>
</body>
</html>