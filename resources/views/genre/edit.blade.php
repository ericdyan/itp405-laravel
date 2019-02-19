@extends('layout')

@section('title', 'Edit Genre')

@section('main')
  <form class="" action="/genres" method="post">
    @csrf
    <div class="form-group">
      <label for="genre">Edit Genre</label>
      <input type="hidden" name="genreId" value="{{$genreId}}">
      <input class="form-control" type="text" name="genre" id="genre" value="{{!old('genre') ? $name : old('genre')}}">
      <small class="text-danger">{{$errors->first()}}</small>
    </div>
    <button class="btn btn-primary" type="submit" name="button">Save</button>
  </form>

@endsection
