@extends('layout')

@section('title', 'Genres')
@section('main')
<table class="table">
      <tr>
        <th><h3>Genres</h3></th>
      </tr>
      @foreach($genres as $genre)
        <tr>
          <th>
            <a class="btn btn-primary" href="/genres/{{$genre->GenreId}}/edit">Edit</a>
            <a href="tracks?genre={{$genre->Name}}">{{$genre->Name}}</a>
          </th>
        </tr>
      @endforeach
    </table>


@endsection
