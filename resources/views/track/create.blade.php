@extends('layout')

@section('title', 'Add a Playlist')

@section('main')
<div class="row">
  <div class="col">
    <form action="/tracks" method="post">
      @csrf
      <!-- Name Input -->
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
        <small class="text-danger">{{$errors->first('name')}}</small>
      </div>
      <!-- Album Input -->
        <div class="form-group">
          <label for="album">Album</label>
          <select name="album" id="album" class="form-control">
            <option value="">-- Select an Album --</option>
            @foreach($albums as $album)
              <option value="{{$album->AlbumId}}">
                {{$album->Title}}
              </option>
            @endforeach
          </select>
          <small class="text-danger">{{$errors->first('album')}}</small>
        </div>
      <!-- Media Input -->
        <div class="form-group">
          <label for="media">Media Type</label>
          <select name="media" id="media" class="form-control">
              <option value="">-- Select a Media Type --</option>
            @foreach($mediaTypes as $mediaType)
            <option value="{{$mediaType->MediaTypeId}}">
              {{$mediaType->Name}}
            </option>
            @endforeach
          </select>
          <small class="text-danger">{{$errors->first('media')}}</small>
        </div>
      <!-- Genre Input -->
        <div class="form-group">
          <label for="genre">Genre</label>
          <select name="genre" id="genre" class="form-control">
              <option value="">-- Select a Genre --</option>
            @foreach($genres as $genre)
            <option value="{{$genre->GenreId}}">
              {{$genre->Name}}
            </option>
            @endforeach
          </select>
          <small class="text-danger">{{$errors->first('genre')}}</small>
        </div>
        <!-- Composer Input -->
        <div class="form-group">
          <label for="composer">Composer</label>
          <input type="text" id="composer" name="composer" class="form-control" value="{{old('composer')}}">
          <small class="text-danger">{{$errors->first('composer')}}</small>
        </div>
        <!-- Milliseconds Input -->
        <div class="form-group">
          <label for="milliseconds">Milliseconds</label>
          <input type="text" id="milliseconds" name="milliseconds" class="form-control" value="{{old('milliseconds')}}">
          <small class="text-danger">{{$errors->first('milliseconds')}}</small>
        </div>
        <!-- Bytes Input -->
        <div class="form-group">
          <label for="bytes">Bytes</label>
          <input type="text" id="bytes" name="bytes" class="form-control" value="{{old('bytes')}}">
          <small class="text-danger">{{$errors->first('bytes')}}</small>
        </div>
        <!-- Price Input -->
        <div class="form-group">
          <label for="price">Unit Price</label>
          <input type="text" id="price" name="price" class="form-control" value="{{old('price')}}">
          <small class="text-danger">{{$errors->first('price')}}</small>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-2">
        Save
        </button>
      </form>
  </div> <!-- end of col -->
</div> <!-- End of row -->


@endsection
