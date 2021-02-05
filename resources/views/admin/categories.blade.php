<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
    <title>Categories</title>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            {{--            <a class="navbar-brand" href="{{route('index')}}">Online Shop</a>--}}
        </div>
        <div id="navbar" class="nav-item navbar-expand navstyle" style="flex-basis: 34%">
            <ul class="nav nav-justified" style="align-items: baseline;justify-content: space-between">
                <li><a href="{{route('addcategory')}}"><h4 style="font-weight: 300">add a new category</h4></a></li>
                <li><h2 style="font-weight: 300">{{$title}}</h2></li>
            </ul>
        </div>
    </div>
</nav>
@if(count($errors) > 0)
    <div class="alert alert-danger" style="margin-top:  72px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
    @if(session('status'))
        <div id="ground" >
            {{session('status')}}
        </div>
    @else
    @endif
    <table class="table table-hover table-striped table-bordered">
        <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Description</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach($categories as $c =>$category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><a style="font-size: 16px;font-weight: normal" id="rgb"
                       href="{{route('editcategory',['category'=>$category->id])}}">Edit</a></td>
                <td>
                    <form action="{{route('editcategory',['category'=>$category->id])}}" method="post">
                        @csrf
                        {{method_field('DElETE')}}
                        <button type="submit" class="btn btn-group-toggle del" id="color">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </thead>
    </table>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>

