<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online Shop: Product</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="nav-item navbar-expand">
            <ul class="nav nav-justified">
{{--                <li class="active"><a style="margin-left: 20px" href="{{route('index')}}">Все товары</a></li>--}}
{{--                <li><a style="margin-left: 20px" href="{{route('categories')}}">Категории</a></li>--}}
                <li><a style="margin-left: 20px" href="{{route('card')}}">В корзину</a></li>
            </ul>
        </div>
{{--        <div id="navbar" class="collapse navbar-collapse">--}}
{{--            <ul class="nav navbar-nav">--}}
{{--                <li class="active"><a href="{{route('index')}}">Все товары</a></li>--}}
{{--                <li ><a href="{{route('categories')}}">Категории</a>--}}
{{--                </li>--}}
{{--                <li ><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>--}}
{{--            </ul>--}}

{{--            <ul class="nav navbar-nav navbar-right">--}}
{{--                <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>--}}

{{--            </ul>--}}
{{--        </div>--}}
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @foreach($products as $p=>$product)
            <h1>{{$product->name}}</h1>
            <p>Цена: <b>{{$product->price}} ₽</b></p>
            <img style="width: 406px" src="{{asset('images') .'/'. $product->image}}" alt="">
            <p>{{$product->description}}</p>

{{--            <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">--}}
                @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <button type="button" class="btn btn-default button" value="{{$product->id}}" name="{{$product->name}}">В корзину</button>
                <input type="hidden" name="_token" value="jvWIHcgayvP7IwJIhgrEUXMhBGwEVKVsiXq0La9Q">
{{--            </form>--}}
        @endforeach
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>
