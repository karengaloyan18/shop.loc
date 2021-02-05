<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
    <title>Category Edit</title>
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
            <input id="name" type="text" name="name" value="{{$categories['name']}}" class="form-control inputstyle">

        </div>


        <div class="col-8">
            <label for="description"></label>
            <input id="description" type="text" name="description" value="{{$categories['description']}}"
                   class="form-control inputstyle">

        </div>

        <div class="col-4">
            <label for="image"></label>
            <input class="filestyle" name="image" type="file" id="image" value="">
        </div>

        <script>
            CKEDITOR.replace('editor')
        </script>

        <div class="col-2">
            <button style="font-size: 40px;font-weight: 300" class="btn btn-default" type="submit">Save</button>
        </div>

        @if(count($errors) > 0)

            <ul>
                @foreach($errors->all() as $error)
                    <li id="font">{{$error}}</li>
                @endforeach
            </ul>

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
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('js/bootstrap-filestyle-2.1.0/bootstrap-filestyle.min.js')}}"></script>
</body>
</html>
