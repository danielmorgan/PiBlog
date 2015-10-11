@extends('layouts.editor')
@section('title', $post->title)
@section('body-class', 'post edit')

@section('content')
    <form action="/editor/post/{{ $post->id }}" method="POST" id="markdown-editor">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!}

        <div class="col-sm-6">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" v-model="title" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                @include('includes.markdown-help')

                <textarea id="content" name="content" v-model="content" v-attr="height:h">{!! $post->content !!}</textarea>
            </div>

            <input type="submit">
        </div>

        <div id="markdown-preview" class="col-sm-6">
            <h1 class="title" v-text="title">{{ $post->title }}</h1>
            <div v-html="content | marked"></div>
        </div>
    </form>
@endsection
