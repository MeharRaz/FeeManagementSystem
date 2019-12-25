<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Form</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4 class="text-center">{{ "Personal Form" }}</h4>
            <hr>
            <form action="" method="post" class="form form-control-sm">
                @csrf
                <div class="form-group row">
                    <label for="" class="col-3">Name:</label>
                    <div class="col-9">
                        <input type="text" name="name" id="name" placeholder="Enter Your Name..." required class="form-control form-control-sm">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Email:</label>
                    <div class="col-9">
                        <input type="email" name="email" id="email" placeholder="Enter Your Email" required class="form-control form-control-sm">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Phone:</label>
                    <div class="col-9">
                        <input type="text" name="phone" id="phone" placeholder="Enter Your Phone" required class="form-control form-control-sm">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Description:</label>
                    <div class="col-9">
                        <textarea name="description" id="description" rows="5" class="form-control form-control-sm" style="resize: none;"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Image:</label>
                    <div class="col-9">
                        <input type="file" name="image" accept="image/*">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3"></label>
                    <div class="col-9">
                        <button class="btn btn-danger" type="reset">
                            Reset
                        </button>
                        <button class="btn btn-success" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
