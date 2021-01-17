ここに投稿一覧を表示する
@extends('layout')
@section('title', '投稿 | oteire')

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
    @empty
        <div>投稿がありません</div>
    @endforelse
  </div>
