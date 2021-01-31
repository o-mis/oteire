@extends('layout')

@section('title', '新規投稿 | oteire')
  <div>
    <form action="{{ url('posts') }}" method="POST">
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
        <button type="submit" name="submit">投稿する</button>
    </form>
  </div>
