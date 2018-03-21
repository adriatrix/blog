@extends('layout/app')

@section('title')
  {{$article->title}}
@endsection

@section('main_content')
  <!-- <h2>{{$article->title}}</h2> -->

  @if($article->updated_at != null)
    {{$article->updated_at->diffForHumans()}}
  @else
    {{$article->updated_at}}
  @endif

  <p>{{$article->content}}</p>


  <form action='{{url("/articles/$article->id/delete")}}' method="post">
    {{csrf_field()}}
    {{method_field('delete')}}
    <button type="submit" name="button">Delete this</button>
  </form>
@endsection
