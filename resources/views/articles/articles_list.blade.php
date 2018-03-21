@extends('layout/app')

@section('title')
  Articles List
@endsection

@section('main_content')


  <ul>
    @foreach($articles as $article)
    <li><a href='{{url("/articles/$article->id")}}'>{{$article->title}}</a> {{$article->id}}</li>
    @endforeach
  </ul>
@endsection
