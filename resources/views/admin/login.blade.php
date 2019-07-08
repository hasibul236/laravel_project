<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yellow Bird</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="container-fluid mt-5">            
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 bordered">
                    <form action="" method="post" class="form-group loginform">
                    @csrf
                    <input type="text" name="name" class="form-control mt-1" placeholder="Your Full Name">
                    <input type="email" name="email" class="form-control mt-1" placeholder="Valid Email Id">
                    <input type="number" name="mobile" class="form-control mt-1" placeholder="Mobile number">
                    <button type="button" class="btn btn-primary mt-1">Save</button>
                </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>
</html>
