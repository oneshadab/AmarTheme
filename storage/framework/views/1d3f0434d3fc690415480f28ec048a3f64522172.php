<!DOCTYPE html>
<html lang="en" class="w-100">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="http://i65.tinypic.com/27zlnn.jpg" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body class="w-100 bg-info">
<!--
    Snippet for clickable class
    Usage <... class="clickable" data-url=$target_url >
!-->
<script>
    $(document).ready(function ($) {
        $('.clickable a').click(function () {
            event.stopPropagation();
        });
        $('.clickable').click(function () {
            var url = $(this).data('url');
            if(url){
                window.location = url;
                return false;
            }
        });
    });
</script>
<style>
    .clickable:hover{
        cursor: pointer;
    }
    .product-card{
        min-height: 470px;
        transition: .3s;
    }
    .product-card:hover{
        box-shadow: 0 20px 25px rgba(0,0,0,0.15);
        transform: translateY(-4px);
    }
</style>
<!-- -------------------------- !-->

<div class="container-fluid bg-light">

    <div class="row bg-primary fixed-top">
        <nav class="col-11 navbar navbar-expand navbar-dark bg-primary rounded mx-auto pl-5" style="min-height: 82px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" style="font-family: Roboto, sans-serif; font-weight: 500;">
                <div class="row w-100">
                    <div class="col-6">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Amar Theme<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Themes</a>
                            </li>
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
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2 text-right">
                        <a class="btn btn-primary border text-right" href="<?php echo e(route('registration')); ?>">
                            Login
                        </a>
                    </div>
                    <div class="col-3">

                        <form action="<?php echo e(route('search')); ?>" method="get">
                            <div class="row text-right">
                                <div class="col-8 p-0">
                                    <input class="form-control" type="text" name='text' placeholder="Search" aria-label="Search">
                                </div>
                                <div class="col-2 p-0 text-left">
                                    <button class="btn btn-primary text-white">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <div class="col-1 p-0">
                                    <a class="btn btn-primary text-white" href="<?php echo e(route('cart')); ?>">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </nav>
    </div>

    <div class="row p-0 bg-light pt-5 p-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="row bg-light" style="min-height: 200px;">

    </div>


</div>

<div class="container-fluid bg-dark w-100 text-white m-0 w-100 p-5" style="height: 250px;">
    <div class="row w-75 mx-auto">
        <div class="col-4">
            <div class="row"><h6 class="lead">Amar Theme</h6></div>
            <div class="row"><p class="small text-secondary">Amar Theme is a registerd trademark of Amartheme.com</p></div>
        </div>
        <div class="col-3">
            <div class="row"><h6 class="lead">Products</h6></div>
            <div class="row"><p class="small text-secondary clickable">Wordpress</p></div>
            <div class="row"><p class="small text-secondary clickable">Joomla</p></div>
            <div class="row"><p class="small text-secondary clickable">Drupal</p></div>
        </div>
        <div class="col-3">
            <div class="row"><h6 class="lead">Company</h6></div>
            <div class="row"><p class="small text-secondary clickable">About</p></div>
            <div class="row"><p class="small text-secondary clickable">Team</p></div>
            <div class="row"><p class="small text-secondary clickable">Contact</p></div>
            <div class="row"><p class="small text-secondary clickable">Careers</p></div>
        </div>

        <div class="col-2">
            <div class="row"><h6 class="lead">Others</h6></div>
            <div class="row"><p class="small text-secondary clickable">Facebook</p></div>
            <div class="row"><p class="small text-secondary clickable">Twitter</p></div>
        </div>
    </div>
</div>
</div>
</body>
</html>