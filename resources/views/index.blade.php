<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online Shop</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">--}}

</head>
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="nav-item navbar-expand">
            <ul class="nav nav-justified">
                <li class="active"><a style="margin-left: 20px" href="{{route('index')}}">Все товары</a></li>
                <li><a style="margin-left: 20px" href="{{route('categories')}}">Категории</a></li>
                <li><a style="margin-left: 20px" href="{{route('card')}}">В корзину</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
{{--        <h1>Все товары</h1>--}}
{{--        <form method="GET" action="http://internet-shop.tmweb.ru">--}}
{{--            <div class="filters row">--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <label for="price_from">Цена от--}}
{{--                        <input type="text" name="price_from" id="price_from" size="6" value="">--}}
{{--                    </label>--}}
{{--                    <label for="price_to">до--}}
{{--                        <input type="text" name="price_to" id="price_to" size="6" value="">--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 col-md-2">--}}
{{--                    <label for="hit">--}}
{{--                        <input type="checkbox" name="hit" id="hit"> Хит</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 col-md-2">--}}
{{--                    <label for="new">--}}
{{--                        <input type="checkbox" name="new" id="new"> Новинка</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 col-md-2">--}}
{{--                    <label for="recommend">--}}
{{--                        <input type="checkbox" name="recommend" id="recommend">Рекомендуем</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <button type="submit" class="btn btn-primary">Фильтр</button>--}}
{{--                    <a href="http://internet-shop.tmweb.ru" class="btn btn-warning">Сброс</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
        @foreach($products as $p => $product)
            @if($p === 0 or $p % 3 === 0)
                <div class="row">
                    @endif
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="labels">


                            </div>
                            <img src="{{asset('images') .'/'. $product->image}}" alt="iPhone X 64GB">
                            <div class="caption">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->price}} ₽</p>
                                <p>
{{--                                                         <form action="" method="POST">--}}
{{--                                                       @csrf--}}
{{--                                                               <button type="submit" class="btn btn-primary">В корзину</button>--}}
                                                             <input type="hidden" name="name" value="{{$product->name}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                    <button type="button" class="btn btn-default button" value="{{$product->name}}">В
                                        корзину
                                    </button>
                                                            @csrf

                                    <a href="{{route('product',['name'=>$product->name])}}"
                                       class="btn btn-default">Подробнее</a>
{{--                                                      </form>--}}
                                {{--                            <input type="hidden" name="_token" value="adj06plrzXmdR13dICCRLDfwwxGKJBDA1TkdkKOF">            </form>--}}
                            </div>
                        </div>
                    </div>
                    @if(($p+1) % 3 === 0 )
                </div>
            @endif
        @endforeach
        <nav>
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="?&amp;page=1" rel="prev" aria-label="pagination.prev">&lsaquo;</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
{{--<script src="public/js/bootstrap.min.js"></script>--}}
<script src="{{assert('js/jquery.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
