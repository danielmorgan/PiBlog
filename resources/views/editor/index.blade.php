@extends('layouts.editor')
@section('title', 'Editor')

@section('content')
<h1>Posts</h1>
<table class="posts">
	@foreach ($posts as $post)
	    <tr class="post">
	        <td>{{ $post->title }}</td>
            <td><a href="/author/{{ $post->user->slug }}">{{ $post->user->name }}</a></td>
            <td>on @datetime($post->created_at)</td>
	    </tr>
	@endforeach
</table>
@endsection
