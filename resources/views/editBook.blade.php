<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/scss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>
    <section class="create_book">
        <div class="container">
            <form action="/book/{{$book->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <input type="text" placeholder="Name" name="name" value="{{$book->name}}">
                <input type="text" placeholder="Category" name="category" value="{{$book->category}}">
                <textarea type="text" placeholder="about" name="about">{{$book->about}}</textarea>
                <button>Send</button>
            </form>
        </div>
    </section>
</body>
</html>