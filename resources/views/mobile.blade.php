<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Category</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Online Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('index')}}">Все товары</a></li>
                <li class="active"><a href="{{route('categories')}}">Categories</a>
                </li>
                <li><a href="http://internet-shop.tmweb.ru/basket">to Card</a></li>
            </ul>

        </div>
    </div>
</nav>
<div class="container">
    <div class="starter-template">
        <h1></h1>
        @foreach($products as $p => $product)
            @if($p === 0 or $p % 3 === 0)
                <div class="row" style="margin-bottom: 30px">
                    @endif
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{asset('images') .'/'. $product->image}}" alt="">
                            <div class="caption">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->price}}₽</p>
                                <p>
                                <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                                    <a href="{{route('product',['name'=>$product->name])}}"
                                       class="btn btn-default"
                                       role="button">more</a>
                                    <input type="hidden" name="_token" value="adj06plrzXmdR13dICCRLDfwwxGKJBDA1TkdkKOF">
                                </form>
                            </div>
                        </div>
                    </div>
                    @if(($p+1) % 3 === 0 )
                </div>
            @endif
        @endforeach
    </div>
    {{ $products->links() }}
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>
