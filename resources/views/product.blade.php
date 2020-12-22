<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Shop: Product</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
    {{--    <script src="public/js/jquery.min.js"></script>--}}
{{--    <script src="/js/bootstrap.min.js"></script>--}}
{{--    <link href="/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="public/css/starter-template.css" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">--}}

</head>
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('index')}}">Все товары</a></li>
                <li ><a href="{{route('categories')}}">Категории</a>
                </li>
                <li ><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>
                {{--                <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>--}}
                {{--                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>--}}
                {{----}}
                {{--                <li class="dropdown">--}}
                {{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>--}}
                {{--                    <ul class="dropdown-menu">--}}
                {{--                        <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>--}}
                {{--                        <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>--}}
                {{--                        <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @foreach($products as $p=>$product)
            <h1>{{$product->name}}</h1>
{{--            <h2>Мобильные телефоны</h2>--}}
            <p>Цена: <b>{{$product->price}} ₽</b></p>
            <img src="{{asset('images') .'/'. $product->image}}" alt="">
            <p>{{$product->description}}</p>

            <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
                @csrf
                <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
                <input type="hidden" name="_token" value="jvWIHcgayvP7IwJIhgrEUXMhBGwEVKVsiXq0La9Q"></form>
        @endforeach
    </div>
</div>
</body>
</html>
