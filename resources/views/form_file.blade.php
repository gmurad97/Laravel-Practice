<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <form action="{{ route('file.type.res') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-3">
                        <input class="form-control" type="file" name="file_first[]">
                    </div>
                    <div class="form-group my-3">
                        <input class="form-control" type="file" name="file_first[]">
                    </div>
                    <div class="form-group my-3">
                        <input class="form-control" type="file" name="file_first[]">
                    </div>
                    <div class="form-group my-3">
                        <input class="form-control" type="file" name="file_second">
                    </div>
                    <div class="form-group my-3">
                        <input class="form-control" type="file" name="file_third">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
