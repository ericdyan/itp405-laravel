<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class GenresController extends Controller
{
    public function index()
    {
      $query = DB::table('genres');

      $genres = $query->get();
      return view('genres', [
        'genres' => $genres
      ]);
    }

    public function edit($genreId)
    {
      $query = DB::table('genres');

      return view('genre/edit', [
        'genre' => $genreId
      ]);
    }

    public function store(Request $request)
    {
      $input = $request->all();
      $validation = Validator::make($input, [
        'genre' => 'required|min:3|unique:genres,Name',
      ]);
      if($validation->fails()) {
        return redirect('/genres/{{$genre}}/edit')
        ->withInput()
        ->withErrors($validation);
      }
      // otherwise insert genre into SQLiteDatabase
      DB::table('genres')
      ->where('GenreId', $request->genreId)
      ->update([
        'Name' => $request->genre
      ]);

      return redirect('/genres');
    }
}
