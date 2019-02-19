@extends('layout')

@section('title', 'Settings')
@section('main')
<h1>Toggle Maintenance Mode</h1>
<form method="post">
  @csrf
  <div class="form-check">
    <input class="form-check-input" type="radio" name="maintenance" value="on">
    <label class="form-check-label" for="on">ON</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="maintenance" value="off">
    <label class="form-check-label" for="on">OFF</label>
  </div>
  <input type="submit" value="Save" class="btn btn-primary">
</form>
@endsection
