ここに投稿一覧を表示する

@foreach ($posts as $post)
    {{ $post->id }}
    {{ $post->updated_at }}
    {{ $post->title }}
    {{ $post->content }}
@endforeach
