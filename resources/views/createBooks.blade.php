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
            <form action="/book" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Category" name="category">
                <input type="file" placeholder="Image" name="file">
                <textarea type="text" placeholder="about" name="about"></textarea>
                <button>Send</button>
            </form>
        </div>
    </section>
</body>
</html>