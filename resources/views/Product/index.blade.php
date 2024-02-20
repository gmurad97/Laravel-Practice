<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="row">
            <form action="">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id=""
                        placeholder="name@example.com"><!-- unfineshed code -->
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id=""
                        placeholder="name@example.com"><!-- unfineshed code -->
                </div>
                <button class="btn btn-success my-5">Add Product</button>
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            Name:{{ $product->title }} |
                            Category:{{ $product->category_id }} |
                            Viewed:{{ $product->viewed }}
                        </li>
                    @endforeach
                </ul>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
