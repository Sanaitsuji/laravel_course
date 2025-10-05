<div>
    @foreach ($all_posts as $post)
        @if(auth()->user()->can('update', $post))
        <a href="{{ route('post.edit', $post->id) }}"> {{ $post->title }} </a><br>
        @endif
    @endforeach
</div>
