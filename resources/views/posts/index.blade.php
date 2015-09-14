@foreach ($posts as $post)
    <article class="post">
        <h1>{{ $post->title }}</h1>
        <div class="meta-data">
            <span class="author">by <a href="/author/{{ $post->user()->slug }}">{{ $post->user()->name }}</a></span>
            <span class="date">on {{ $post->created }}</span>
        </div>
        <div class="content">{{ $post->content }}</div>
    </article>
@endforeach