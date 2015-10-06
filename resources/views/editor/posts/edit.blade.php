@extends('layouts.editor')
@section('title', $post->title)
@section('body-class', 'post edit')

@section('content')
    <form action="/editor/post/{{ $post->id }}" method="POST">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!}

        <div id="post-editor" class="col-sm-6">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="markdown-editor">Content:</label>
                <textarea id="markdown-editor" name="content">{{ $post->content }}</textarea>
            </div>

            <input type="submit">
        </div>

        <div id="markdown-preview" class="col-sm-6">
            <h1>{{ $post->title }}</h1>
            <div class="content">{!! $post->content !!}</div>
        </div>

    </form>
@endsection
