<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Card</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
</head>
<body>
@foreach($first as $frst => $frs)
    <div class="col-sm-5 col-md-2">
        <div class="thumbnail" style="text-align: center">
            <div class="labels">


            </div>
        <img style="width: 200px;" src="{{asset('images/').'/'.$frst }}" alt="{{$frst}}">
        <div class="caption">
            <h3>{{$frs}}</h3>
        </div>
    </div>
    </div>
@endforeach
<script src="{{asset('js/jquery.min.js')}}"></script>
{{--<script src="public/js/bootstrap.min.js"></script>--}}
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>
