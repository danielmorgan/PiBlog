@extends('layouts.editor')
@section('title', 'Create Post')
@section('body-class', 'post create')

@section('content')
    <form action="/editor/post" method="POST" enctype="multipart/form-data" id="markdown-editor">
        {!! method_field('POST') !!}
        {!! csrf_field() !!}

        <div class="col-sm-6">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" v-model="title">
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                @include('includes.markdown-help')

                <textarea id="content" name="content" v-model="content" v-attr="height:h"></textarea>
            </div>

            <input type="file" id="featured_photo" name="featured_photo">
            <input type="submit">
        </div>

        <div id="markdown-preview" class="col-sm-6">
            <h1 class="title" v-text="title"></h1>
            <div v-html="content | marked"></div>
        </div>
    </form>
@endsection
