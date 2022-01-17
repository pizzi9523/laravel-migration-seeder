@extends('layouts.app')

@section('page-title', 'Blog')


@section('content')
   
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
        <div class="col-6">

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                     <div class="col-md-4">
                      <img src="{{$post->image}}" class="img-fluid rounded-start" alt="...">
                     </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->text}}</p>
                            <p class="card-text">{{$post->author}}</p>
                            <p class="card-text">{{$post->date}}<small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        
    @endforeach

        </div>
    </div>
    

    <div class="my_pagination">
        {{$posts->links()}}
    </div>
@endsection