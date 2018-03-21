@extends('layout/app')

@section('title')
  Articles List
@endsection

@section('main_content')

  <form class="" action="{{url("/articles/create")}}" method="post">
    {{ csrf_field() }}
    <fieldset>
      <legend>Add New Article</legend>
      <label for="title">Title:</label><br>
      <input type="text" name="title"><br>
      <label for="content">Content:</label><br>
      <textarea name="content" rows="4" cols="18"></textarea><br>

      <input type="submit" name="submit" value="Create">
    </fieldset>
  </form>

@endsection
