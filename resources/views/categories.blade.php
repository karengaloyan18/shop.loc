<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Shop</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
{{--    <script src="/js/jquery.min.js"></script>--}}
{{--    <script src="/js/bootstrap.min.js"></script>--}}
{{--    <link href="/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/css/starter-template.css" rel="stylesheet">--}}
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
                <li><a href="{{route('index')}}">Все товары</a></li>
                <li class="active"><a href="{{route('categories')}}">Категории</a>
                </li>
{{--                <li><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>--}}
                {{--                <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>--}}
                {{--                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>--}}

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

@foreach($categories as $c => $category)
    <div class="container">
        <div class="starter-template">
            <div class="panel">
                <a href="{{route('category',['code'=>$category->name])}}">
                    <img src="{{asset('images') .'/'. $category->image}}" alt="">
                    <h2>{{$category->name}}</h2>
                </a>
                <p>{{$category->description}}</p>
            </div>
        </div>
    </div>
@endforeach
</body>
</html>
