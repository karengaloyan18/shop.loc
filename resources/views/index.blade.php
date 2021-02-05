<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online Shop</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" {{--href="{{route('index')}}"--}}>Online Shop</a>
        </div>
        <div id="navbar" class="nav-item navbar-expand">
            <ul class="nav nav-justified">
                <li><a style="margin-left: 20px" href="{{route('indexcategories')}}">Categories</a></li>
                <li><a style="margin-left: 20px" href="{{route('card')}}">to Card</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template" style="display: flex;flex-wrap: wrap">
        @foreach($products as $p => $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('images') .'/'. $product->image}}" alt="">
                    <div class="caption">
                        <h3>{{$product->name}}</h3>
                        <p>{{$product->price}} ₽</p>
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        @csrf
                        <a href="{{route('product',['name'=>$product->name])}}"
                           class="btn btn-default">more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $products->links() }}
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>
