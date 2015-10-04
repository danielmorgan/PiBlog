@extends('layouts.editor')
@section('title', 'All Posts')
@section('body-class', 'index')

@section('content')
<table class="table posts">
	<thead>
		<tr>
			<th>Post</th>
			<th class="hidden-xs">Author</th>
			<th class="hidden-xs">Created At</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($posts as $post)
			<tr class="post">
				<td>
					<a href="/editor/post/{{ $post->id }}">{{ $post->title }}</a>
				</td>
				<td class="hidden-xs">
					<a href="/editor/post/{{ $post->id }}">{{ $post->user->name }}</a>
				</td>
				<td class="hidden-xs">
					<a href="/editor/post/{{ $post->id }}">@datetime($post->created_at)</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection
