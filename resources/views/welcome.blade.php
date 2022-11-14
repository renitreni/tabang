<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title><!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="main-body">
<div class="wrap">
    <div class="container">
        <div class="card mt-5" style="background-color: #fffefd85;">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <button class="button alert-btn">
                            <img src="{{ asset('images/alert.png') }}" width="150px" height="150px">
                        </button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 mb-2">
                        <label class="form-label">Fullname</label>
                        <input type="text" name="fullname" class="form-control"/>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <label class="form-label">Birthdate</label>
                        <input type="date" name="birthdate" class="form-control"/>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="">-- Select Option --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-6 mb-2">
                        <label class="form-label">Passport No.</label>
                        <input type="text" name="passport_no" class="form-control"/>
                    </div>
                    <div class="col-md-4 col-6 mb-2">
                        <label class="form-label">Occupation</label>
                        <input type="text" name="occupation" class="form-control"/>
                    </div>
                    <div class="col-12">
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control"/>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <label class="form-label">Contact Person</label>
                        <input type="text" name="contact_person" class="form-control"/>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <label class="form-label">Contact #1</label>
                        <input type="text" name="contact_1" class="form-control"/>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <label class="form-label">Contact #2</label>
                        <input type="text" name="contact_2" class="form-control"/>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="form-label">Complaint</label>
                        <textarea type="text" name="complaint" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="col-md-12 mb-2">
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
