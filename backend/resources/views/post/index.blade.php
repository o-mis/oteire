ここに投稿一覧を表示する
@extends('layout')
@section('title', '投稿 | oteire')

  <div class="uk-container">
    @foreach ($posts as $post)
        {{ $post->id }}
        {{ $post->updated_at }}
        {{ $post->title }}
        {{ $post->content }}
    @endforeach
  </div>

