@extends('layouts.blog')
@section('title', 'All Posts')
@section('body-class', 'index')

@section('content')
<section class="posts">
    @foreach ($posts as $post)
        <article class="post" 
            id="{{ $post->slug }}"
        @if ($post->featuredPhoto)
            data-featured-photo="/photo/{{ $post->featuredPhoto->filename }}"
        @endif>
            <div class="content-wrap">
                <a href="#{{ $post->slug }}" v-link="{ path: '/{{ $post->slug }}' }">
                    <h1 class="title">{{ $post->title }}</h1>
                </a>
                <div class="meta-data">
                    <span class="author">by <a href="/author/{{ $post->user->slug }}">{{ $post->user->name }}</a></span>
                    <span class="date">on @datetime($post->created_at)</span>
                    <span class="ago">(@ago($post->created_at))</span>
                </div>
                <div class="content">@markdown($post->content)</div>
            </div>
        </article>
    @endforeach
</section>
@endsection
