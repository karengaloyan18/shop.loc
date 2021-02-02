<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
    <title>{{$title}}</title>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            {{--            <a class="navbar-brand" href="{{route('index')}}">Online Shop</a>--}}
        </div>
        <div id="navbar" class="nav-item navbar-expand">
            <ul class="nav nav-justified">
                <li><h2 style="font-weight: 300">{{$title}}</h2></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <form action="{{--{{route('editproduct',['product'=>$product->id])}}--}}#" method="post"
          class="form-horizontal  formstyle" enctype="multipart/form-data">
        @csrf

        <div class="col-4">
            <label for="name"></label>
            <input id="name" type="text" name="name" value="{{old('name')}}" class="form-control inputstyle">

        </div>


        <div class="col-4">
            <label for="price"></label>
            <input id="price" type="text" name="price" value="{{old('price')}}" class="form-control inputstyle">

        </div>


        <div class="col-8">
            <label for="description"></label>
            <input id="description" type="text" name="description" value="{{old('description')}}" class="form-control inputstyle">

        </div>


        <div class="col-4">
            <label for="category_name"></label>
            <input id="category_name" type="text" name="category_name" value="{{old('category_name')}}" class="form-control inputstyle">

        </div>

        <div class="col-2">
            <button style="font-size: 40px;font-weight: 300" class="btn btn-default" type="submit">Save</button>
        </div>

        @if(count($errors) > 0)
            {{--        <div>--}}
            <ul>
                @foreach($errors->all() as $error)
                    <li id="font">{{$error}}</li>
                @endforeach
            </ul>
            {{--        </div>--}}
        @endif
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>

        @else
        @endif
    </form>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>

