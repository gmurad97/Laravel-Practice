<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }}</title>
</head>
<body>
    <div class="container">
        <h1>Categories</h1>
        <ol type="1">
            @foreach($categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ol>
        <h1>Products</h1>
        <ul>
            <li>Product1 -> Price -> Reiting</li>
        </ul>
    </div>
</body>
</html>
