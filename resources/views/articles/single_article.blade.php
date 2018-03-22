@extends('layout/app')

@section('title')
  {{$article->title}}
@endsection

@section('main_content')
  <!-- <h2>{{$article->title}}</h2> -->

  @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif

  @if($article->updated_at != null)
    {{$article->updated_at->diffForHumans()}}
  @else
    {{$article->updated_at}}
  @endif

  <p>{{$article->content}}</p>

  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    Edit this
  </button>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit {{$article->title}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="" action='{{url("/articles/$article->id/edit")}}' method="post">
          <div class="modal-body">
            {{ csrf_field() }}
            <fieldset>
              <label for="title">Title:</label><br>
              <input type="text" name="title" value="{{$article->title}}"><br>
              <label for="content">Content:</label><br>
              <textarea name="content" rows="4" cols="18">{{$article->content}}</textarea><br>
            </fieldset>
          </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" name="submit" value="Save">
          </div>
        </form>
      </div>
    </div>
  </div>


  <form action='{{url("/articles/$article->id/delete")}}' method="post">
    {{csrf_field()}}
    {{method_field('delete')}}
    <button type="submit" class="button is-danger" name="button">Delete this</button>
  </form>
@endsection
