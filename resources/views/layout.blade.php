<!DOCTYPE html>
<html lang="en" class="w-100">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>
<body class="w-100 bg-info">
<!--
    Snippet for clickable class
    Usage <... class="clickable" data-url=$target_url >
!-->
    <script>
        $(document).ready(function ($) {
            $('.clickable').click(function () {
                var url = $(this).data('url');
                window.location = url;
                return false;
            });
        });
    </script>
    <style>
        .clickable:hover{
            cursor: pointer;
        }
    </style>
<!-- -------------------------- !-->

<div class="container">
    <div class="row">
        <div class="col-12 bg-white">
            <div class="container w-100">
                <div class="row p-4 h-75 pr-0">
                    <div class="col-8">
                        <h1 class="">AmarTheme.com</h1>
                    </div>
                    <div class="col-4">
                        @include('registration_box')
                    </div>
                </div>
                <div class="w-100 mt-4">
                    <nav class="navbar navbar-expand navbar-dark bg-primary rounded">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarsExample09">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Themes<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Wordpress<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Joomla<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Drupal<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Custom<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-md-0">
                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                <button type="button" class="btn btn-primary" onclick="window.location='AmarTheme/public/search/'">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </nav>
                </div>


            </div>
        </div>
    </div>
    <div class="row p-0 bg-white">
        <div class="container mt-5">
            @yield('content')
        </div>
    </div>
    <div class="row bg-white" style="min-height: 200px;">

    </div>


</div>

<div class="container-fluid bg-secondary w-100 text-white m-0 w-100 p-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
            <div class="row"><div class="col-12"><i class="fas fa-address-card"></i> Contact</div> </div>
            <div class="row"><div class="col-12"><i class="fas fa-at"></i> E-mail</div></div>
        </div>

        <div class="col-4"></div>
        <div class="col-2">
            <div class="row"><div class="col-12"><i class="fas fa-question-circle"></i> Help and Support</div></div>
            <div class="row"><div class="col-12"><i class="fas fa-smile"></i> Feedback</div></div>
        </div>
    </div>
</div>
</body>
</html>