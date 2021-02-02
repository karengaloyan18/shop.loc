<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
{{--<body>--}}
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" {{--href="{{route('index')}}"--}}>Admin Panel</a>
        </div>
    </div>
</nav>

<div class="container">
    <ul class="nav" style="display: flex;justify-content: space-evenly;margin-top: 50px">
        <li class="nav-item">
            <a class="nav-link" href="{{route('products')}}" id="rgb">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="rgb">Categories</a>
        </li>

    </ul>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>
