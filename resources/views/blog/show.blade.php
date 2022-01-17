@extends('layouts.app')

@section('page-title', 'Post')


@section('content')
   
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->text}}</p>
    <p class="card-text">{{$post->author}}</p>

    <p class="card-text"><small class="text-muted">{{$post->date}}</small></p>
  </div>
  <img src="{{$post->image}}" class="img-fluid" alt="..." >
</div>
@endsection