
@extends('layouts.app')
@section('content')
<h3>List Of All Serieses</h3>
<hr>

@foreach ($serieses as $series)
<h2 class="card-title">{{$series->title}}</h2>
<p class="card-text">{{$series->description}}</p>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    @foreach ($series->episodes as $episode)
        <div class="carousel-item active">
         <img src="/storage/avatars/{{$episode->thumbnail}}"  alt = "asassadsda" width="1150" height="300">
            <div class="carousel-caption">
              <h1>{{$episode->title}}</h1>
              <p>{{$episode->description}}</p>
            </div>   
        </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
@endforeach

 @endsection