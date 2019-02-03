<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class TracksController extends Controller
{
    public function index(Request $request)
    {
      $query = DB::table('tracks')->select('tracks.Name as Name','UnitPrice',
      'genres.Name as Genre', 'albums.Title as AlbumTitle',
      'artists.Name as ArtistName')
      ->join('albums', 'tracks.AlbumId', '=', 'albums.AlbumId')
      ->join('artists', 'albums.ArtistId', '=', 'artists.ArtistId')
      ->join('genres', 'tracks.GenreId', '=', 'genres.GenreId');

      if ($request->query('genre')) {
        $query->where('Genre', '=', $request->query('genre'));
      }

      $tracks = $query->get();
      return view('tracks', [
        'tracks' => $tracks,
        'genre' => $request->query('genre')

      ]);
    }

    public function create()
    {
      $albums = DB::table('albums')->get();
      $mediaTypes = DB::table('media_types')->get();
      $genres = DB::table('genres')->get();

      return view('track.create', [
        'albums' => $albums,
        'mediaTypes' => $mediaTypes,
        'genres' => $genres
      ]);
    }

    public function store(Request $request)
    {
      // $name = $request->name;
      $input = $request->all();
      $rules = [
        'name' => 'required',
        'album' => 'required',
        'media' => 'required',
        'genre' => 'required',
        'composer' => 'required',
        'milliseconds' => 'required|numeric',
        'bytes' => 'required|numeric',
        'price' => 'required|numeric'

      ];
      $validate = Validator::make($input,$rules);

      if($validate->fails()) {
        return redirect('/tracks/new')
        ->withInput()
        ->withErrors($validate);
      }

      // If validation succeeds
      DB::table('tracks')->insert([
        'Name' => $request->name,
        'AlbumId' => $request->album,
        'MediaTypeId' => $request->media,
        'GenreId' => $request->genre,
        'Composer' => $request->composer,
        'Milliseconds' => $request->milliseconds,
        'Bytes' => $request->bytes,
        'UnitPrice' => $request->price
      ]);

      return redirect('/tracks');

      // dd($media, $album, $name, $genre);

    }
}
