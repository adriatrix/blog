@extends('layout/app')

@section('title')
  Articles List
@endsection

@section('main_content')
  <ul>
    @foreach($articles as $article)
    <li>{{$article}}</li>
    @endforeach
  </ul>
@endsection
