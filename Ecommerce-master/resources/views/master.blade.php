<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    {{-- <script>
        $(document).ready(function(){
            $("button").click(function(){
                alert("all set")
            })
        })
    </script> --}}
</body>
<style>
    .custom-login{
        height: 530px;
        padding-top: 100px; 
    }
    .custom-footer{
        text-align: center;   
    }
    img.slider-img{
        height: 400px !important;
        padding: 0px 500px;  
    }
    .custom-product{
        height: 530px;
    }
    .slider-text{
        background-color: #373a364a !important;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 25%;
    }
    .trending-wrapper{
        margin: 20px;
        padding-left: 100px;   
    }
    .detail-img{
        height: 200px
    }
    .search-box{
        width: 800px !important;
    }
    .cart-list-divider{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
    }
    .table.table-striped, .custom-form{
        margin-top: 20px;
        margin-left: 350px;
    }

</style>
</html>