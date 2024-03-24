<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Pagination</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <table class="m-5">
        <tr>
            <th>Name</th>
            <th>Slug</th>
        </tr>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <div class="m-5">
        {{ $categories->links('pagination.bootstrap-4') }}
    </div>


    <div>
        <h1 id="ajax_style"></h1>
    </div>

    <script>

        let x = document.getElementById("ajax_style");

        let b = fetch("http://127.0.0.1:8000/ajax",{
            "method":"GET"
        }).then((response)=>{
            return response.json();
        }).then((data)=>{
            console.log(data);
        });


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
