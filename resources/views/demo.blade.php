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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<style>
    .shadow-nav{
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    }

    .embed-responsive {

    }
    .body{

    }

</style>
<body class="bg-dark">


<div class="container p-4">
    <div class="row">
        <div class="col-6 text-left">
            <h2 class="text-white lead" style="font-size: 34px;">Live Preview</h2>
        </div>
        <div class="col-4"></div>
        <div class="col-2 text-right">
            <a class="btn btn-success btn-block text-white" href="{{route('addToCart', $id)}}">
                <i class="fas fa-shopping-cart"></i> Add to cart
            </a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-2 text-left">
            <a class="btn btn-primary text-white btn-block" href="{{route('product', $id)}}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
        <div class="col-8"></div>
        <div class="col-2 text-right">
            <button class="btn btn-primary btn-block">
                <i class="fas fa-wrench"></i> Customize
            </button>
        </div>
    </div>
</div>

<div class="embed-responsive embed-responsive-21by9">
    <iframe src="{{route('demo_url', $id)}}" allowfullscreen></iframe>
</div>
</body>
</html>