
@extends('layouts.app')
@section('content')
<h1>List Of All Episodes</h1>
<hr>

<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
       @foreach ($episodes as $episode)
               <div class="carousel-item active">
                 <img src="/storage/avatars/{{$episode->thumbnail}}"  alt = "asassadsda" width="1150" height="300">
                 <div class="carousel-caption">
                   <h1>{{$episode->title}}</h1>
                 <p>{{$episode->description}}</p>
                 </div>   
               </div>
             
          @endforeach
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

 @endsection