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
  <form action="{{ route('posts.destroy', $post->id ) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" name="" value="削除する">
  </div>
</div>
@endsection
