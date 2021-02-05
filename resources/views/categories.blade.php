<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Categories</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Online Shop</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="starter-template" style="display: flex;flex-wrap: wrap">
        @foreach($categories as $c => $category)
{{--            @if($c === 0 or $c % 3 === 0)--}}
{{--                <div class="row" style="margin-bottom: 30px">--}}
{{--                    @endif--}}
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="labels">
                            </div>
                            <img src="{{asset('images') .'/'. $category->image}}" alt="">
                            <div class="caption">
                                @csrf
                                <h3><a href="{{route('category',['code'=>$category->name])}}">
                                        {{$category->name}}
                                    </a>
                                </h3>
                                <p>{{$category->description}}</p>
                            </div>
                        </div>
                    </div>
{{--                    @if(($c+1) % 3 === 0 )--}}
{{--                </div>--}}
{{--            @endif--}}
        @endforeach
    </div>
</div>
</body>
</html>
