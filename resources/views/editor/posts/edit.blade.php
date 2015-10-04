@extends('layouts.editor')
@section('title', $post->title)
@section('body-class', 'post edit')

@section('content')
    <div class="editor col-xs-6">
        <input type="text" name="title" value="{{ $post->title }}">
        <textarea name="content">{{ $post->content }}</textarea>
    </div>
    <div class="preview col-xs-6">
        <h1>{{ $post->title }}</h1>
        <div class="content">{!! $post->content !!}</div>
    </div>
@endsection
