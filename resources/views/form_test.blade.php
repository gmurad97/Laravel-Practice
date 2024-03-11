<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            @endif
                <form action="{{ route('form_test.post') }}" method="post">
                    @csrf
                    @method("post")
                    <div class="form-group">
                        <label for="first_name_label">First Name</label>
                        <input type="text" name="first_name" id="first_name_label" value="{{ old('first_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="last_name_label">Last Name</label>
                        <input type="text" name="last_name" id="last_name_label" value="{{ old('last_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="age_check_label">+18 ?</label>
                        <input type="checkbox" name="age_check" id="age_check_label" {{ old("age_check") ? "checked" : "" }} >
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
