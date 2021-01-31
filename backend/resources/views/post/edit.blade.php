@extends('layout')

@section('content')
<div>
  <form action="{{ url('posts/'.$post->id) }}" method="POST">
    @method('PUT')
    @csrf
      <div class="mt-5">
        <label for="title">タイトル</label>
        <input id="title" type="text" name="title">
      </div>
      <div class="mt-3">
        <label for="content">内容</label>
        <textarea name="content"></textarea>
      </div>
      <div>
      <button type="submit" name="submit">編集する</button>
  </form>
</div>
@endsection
