@extends('layouts.blog')
@section('title', 'All Posts')
@section('body-class', 'index')

@section('content')
<section class="posts">
	@foreach ($posts as $post)
	    <article class="post">
	        <h1>{{ $post->title }}</h1>
	        <div class="meta-data">
	            <span class="author">by <a href="/author/{{ $post->user->slug }}">{{ $post->user->name }}</a></span>
	            <span class="date">on @datetime($post->created_at)</span>
	            <span class="ago">(@ago($post->created_at))</span>
	        </div>
	        <div class="content">@markdown($post->content)</div>
	    </article>
	@endforeach
</section>
@endsection
