@extends('layout')

@section('title', 'Tracks')

@section('main')
<a class="btn btn-primary" href="/tracks/new">Add Track</a>
<table class="table">
      <tr>
        <th>
          {{'Genre: ' . $genre . ' (' . $tracks->count() . ' tracks' . ')'}}
        </th>
      </tr>
      <tr>
        <th>Track Name</th>
        <th>Album Title</th>
        <th>Artist Name</th>
        <th>Unit Price</th>
      </tr>

      @foreach($tracks as $track)
        <tr>
          <td>
            {{$track->Name}}
          </td>
          <td>
            {{$track->AlbumTitle}}
          </td>
          <td>
            {{$track->ArtistName}}
          </td>
          <td>
            {{$track->UnitPrice}}
          </td>
        </tr>
      @endforeach
    </table>
@endsection
