@extends('layouts.app')

@section('page-title', 'Post')


@section('content')
<section class="post">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">{{$post->author}}</h1>

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{$post->image}}" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#">{{$post->title}}</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>{{$post->date}}
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">{{$post->text}}</div>
				
			</div>
		</article>
@endsection