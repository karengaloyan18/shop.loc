<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Card</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="starter-template">
        <div class="row">
            @foreach($first as $frst => $frs)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" style="text-align: center">
                        <img style="width: 200px;" src="{{asset('images/').'/'.$frs }}" alt="{{$frs}}">
                        <div class="caption">
                            <h3>{{$frst}}</h3>
{{--                            <a href="{{route('product',['name'=>$frs])}}" style="color: #c82333"--}}
{{--                               class="btn btn-group-vertical">Удалить</a>--}}
                            <form method="post">
                                @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <button style="color: #c82333" type="button"   class="btn btn-group-vertical del"
                                    value="one" name="{{$frst}}">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

{{--            @php($one = [])--}}
                <div id="total_price">
            <h3>Total price</h3><hr>
            <h4>{{$total}}</h4>
                </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>
