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
    <header>
        <div class="container">
            <div class="header_top">
                <a href="/" class="header_top_a">Home</a>
                <a href="/" class="header_top_a">qwewqe</a>
                <a href="/" class="header_top_a">qweqw</a>
            </div>
            <h1>Books</h1>
        </div>
        <hr>
        <div class="category container">
            <a href="/">Category1</a>
            <a href="/">Category2</a>
        </div>
        <hr>
    </header>
    <section class="book">
        <div class="container">
            <div class="relative">
                @foreach ($books as $book)                
                <img src="{{$book->image}}" alt="">
                <div>
                    <h2>{{$book->name}}</h2>
                    <p>{{$book->category}}</p>
                    <p>{{$book->about}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>