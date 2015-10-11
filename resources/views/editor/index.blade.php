@extends('layouts.editor')
@section('title', 'All Posts')
@section('body-class', 'dashboard')

@section('content')
<table class="table table-bordered posts">
	<thead>
		<tr>
			<th>Post</th>
			<th class="hidden-xs">Created At</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($posts as $post)
			<tr class="post">
				<td>
					<a href="/editor/post/{{ $post->id }}/edit">{{ $post->title }}</a>
				</td>
				<td class="hidden-xs">
					<a href="/editor/post/{{ $post->id }}/edit">@datetime($post->created_at)</a>
				</td>
				<td class="actions">
					<a href="/editor/post/{{ $post->id }}/edit" class="btn btn-success">Edit</a>
					<a href="/editor/post/{{ $post->id }}/preview" class="btn btn-info">Preview</a>
					<form action="/editor/post/{{ $post->id }}" method="POST">
						{!! method_field('DELETE') !!}
						{!! csrf_field() !!}
						<input type="submit" class="btn btn-danger delete" value="Delete">
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection
