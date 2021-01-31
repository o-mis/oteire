@extends('layout')

{{-- bladeはphpコードを含むことが出来るテンプレートエンジン --}}

  {{-- <div class="uk-container">
    @foreach ($posts as $post)
      <div>
        {{ $post->id }}
      </div>
      <div>
        {{ $post->updated_at }}
      </div>
      <div>
        {{ $post->title }}
      </div>
      <div>
        {{ $post->content }}
      </div>
    @endforeach
  </div> --}}

@section('content')
  <div>
    <a href="/posts/create" class="btn">投稿を作成する</a>
  </div>
  <div class="uk-container">
    {{-- forelse,emptyを使うとデータがからのときの処理もできる --}}
    @forelse ($posts as $post)
      <div>
        {{ $post->id }}
      </div>
      <div>
        {{ $post->updated_at }}
      </div>
      <div>
        {{ $post->title }}
      </div>
      <div>
        {{ $post->content }}
      </div>
      <div>
      <a href="/posts/{{ $post->id }}" class="btn">詳しく見る</a>
      </div>
    @empty
        <div>投稿がありません</div>
    @endforelse
  </div>
@endsection
