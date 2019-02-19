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

    $query = DB::table('genres')->where('GenreId', '=', $genreId)->first();
    $genreName = $query->Name;
    return view('genre.edit', [
      'genreId' => $genreId,
      'name' => $genreName
    ]);
    // // $genre = DB::table('genres')->where('GenreId', '=', $genreId)->get();
    // return view('genre/edit', [
    //   'genre' => $genreId
    // ]);
  }

  public function store(Request $request)
  {
    // dd($request);
    $input = $request->all();
    $genreId = $request->genreId;
    $validated = Validator::make($input, [
      'genre' => 'required|unique:genres,Name|min:3'
    ]);

    if($validated->fails()) {
      return redirect("/genres/$genreId/edit")
        ->withErrors($validated)
        ->withInput();
    }
    // if($validated->fails()) {
    //   return redirect()->action('GenresController@edit',[
    //     'genreId' => $genreId
    //   ])
    //     ->withErrors($validated)
    //     ->withInput();
    // }

    DB::table('genres')
    ->where('GenreId', $genreId)
    ->update(['Name' => $request->genre]);


    return redirect('/genres');
  }
}
