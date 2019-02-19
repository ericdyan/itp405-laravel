<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin/profile', [
        'user' => Auth::user()
      ]);
    }

    public function settings()
    {
      return view('admin/settings');
    }

    public function toggle()
    {
      DB::table('configurations')
      ->where('name', '=','maintenance')
      ->update(['value' => request('maintenance')]);
      return redirect('/');
    }
    public function maintenance()
    {
      return view('/maintenance');
    }
}
