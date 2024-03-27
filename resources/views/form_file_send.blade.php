<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <form action="{{ route('file.store') }}" method="POST" class="form-control" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="email_label">Email</label>
                    <input class="form-control" type="email" name="email" id="email_label">
                </div>
                <div class="form-group">
                    <label for="password_label">Password</label>
                    <input class="form-control" type="password" name="password" id="password_label">
                </div>
                <div class="form-group">
                    <label for="img_file_label">Image</label>
                    <input class="form-control" type="file" name="img_file" id="img_file_label">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Send!</button>
            </form>
        </div>
    </div>
</body>
</html>
