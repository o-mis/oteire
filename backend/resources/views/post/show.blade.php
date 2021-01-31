@extends('layout')
@section('title', '投稿詳細 | oteire')

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
    <a href="" class="btn">削除</a>
  </div>
</div>
