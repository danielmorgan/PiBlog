@extends('layouts.blog')
@section('title', 'All Posts')
@section('body-class', 'posts index')

@section('content')
<section id="posts">
    @foreach ($posts as $post)
        <article class="post" 
            id="{{ $post->slug }}"
            data-slug="{{ $post->slug }}"
        @if ($post->featuredPhoto)
            data-featured-photo="/photo/{{ $post->featuredPhoto->filename }}"
        @endif>
            <div class="content-wrap">
                <a v-link="{ path: '/{{ $post->slug }}' }" class="post-link">
                    <h1 class="title">{{ $post->title }}</h1>
                </a>
                <div class="meta-data">
                    <span class="author">by <a href="/author/{{ $post->user->slug }}">{{ $post->user->name }}</a>,</span> 
                    <span class="ago" title="@datetime($post->created_at)">@ago($post->created_at)</span>
                </div>
                <div class="content">@markdown($post->content)</div>
            </div>
        </article>
    @endforeach
    <router-view></router-view>
</section>
@endsection
