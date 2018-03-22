@extends('layout/app')

@section('title')
  Articles List
@endsection

@section('main_content')

  @if(Session::has('create_article_success'))
    {{ Session::get('create_article_success')}}
  @endif

  <a class="button is-primary"href='{{url("/articles/create")}}'>Create</a>

  <ul>
    @foreach($articles as $article)
    <li><a href='{{url("/articles/$article->id")}}'>{{$article->title}}</a> {{$article->id}}</li>
    @endforeach
  </ul>
@endsection
