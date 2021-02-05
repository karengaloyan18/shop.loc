<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Card</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
</head>
<body id="body">
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Online Shop</a>
        </div>
        <div class="text-danger" id="degenerad"></div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <div class="row" style="margin-bottom: 30px">
            @foreach($first as $frst => $frs)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="labels">
                        </div>
                        <img {{--style="width: 200px;"--}} src="{{asset('images/').'/'.$frs['image'] }}"
                             alt="{{$frs['image']}}">
                        <div class="caption">
                            <h3>{{$frs['prod']}}</h3>
                            <p>{{$frs['price'].' ₽'}}</p>
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <button type="button" class="btn btn-group-toggle del" id="color"
                                    value="{{$frst}}" name="{{$frs['prod']}}">Remove from card
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
            <div id="total_price">
                {{'Total price'}}
                <hr>
                <h3>{{$total . ' ₽'}}</h3>

                @foreach($second as $scnd => $sec)
                    {{$sec . ' ₽'}}<br>
                @endforeach
                @if($total !=0)
                    <a href="{{route('checkout')}}" style="font-size: 50px"
                        id="checkout"><h3 >checkout</h3></a>
                @endif
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>
