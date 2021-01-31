@extends('layout')

@section('content')
<div class="uk-container">
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
    <a href="{{ url('posts/'.$post->id.'/edit') }}">編集する</a>
    <a href="">削除</a>
  </div>
</div>
@endsection
