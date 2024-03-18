<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Pagination</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="silentFile">

        <button type="submit">Submit</button>
    </form>
    <table>
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
    <div>
        {{ $categories->links() }}
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
