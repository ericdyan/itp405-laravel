<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
}
