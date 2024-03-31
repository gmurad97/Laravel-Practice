<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-3">
                <form action="{{ route('captcha.verify') }}" method="POST" enctype="">
                    @csrf
                    <input class="form-control" type="text" name="first_name" placeholder="First name"><br>
                    <input class="form-control"type="text" name="last_name" placeholder="Last name"><br>
                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_V2_PUBLIC_KEY') }}"></div>
                    <button class="btn btn-primary mt-3" type="submit">Submit</button>
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
