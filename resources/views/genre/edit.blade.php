@extends('layout')
@section('title', 'Edit Genre')
@section('main')
<div class="row">
  <div class="col">
    <form action="/genres" method="post">
      @csrf
      <div class="form-group">
        <label for="genre">New Genre</label>
        <input type="hidden" id="genreId" name="genreId" value="{{$genre}}">
        <input type="text" id="genre" name="genre" class="form-control" value="{{old('genre')}}">
        <small class="text-danger">{{$errors->first('genre')}}</small>
      </div>
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary mt-2">
      Save
      </button>
    </form>
  </div>
</div>


@endsection
