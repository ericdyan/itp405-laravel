<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-md">
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        @if (Auth::check())
          <li class="nav-item">
            <a href="/profile" class="nav-link navbar-brand">Profile</a>
          </li>
          <li class="nav-item">
            <a href="/invoices" class="nav-link navbar-brand">Invoices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="/genres">Genres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="/tracks">Tracks</a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link navbar-brand">Logout</a>
          </li>
          <li class="nav-item">
            <a href="/settings" class="nav-link navbar-brand">Settings</a>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link navbar-brand">Login</a>
          </li>
          <li class="nav-item">
            <a href="/signup" class="nav-link navbar-brand">Sign Up</a>
          </li>
        @endif
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
      @yield('main')
  </div>

</body>
</html>
