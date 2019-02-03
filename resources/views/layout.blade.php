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
        <li class="nav-item">
          <a class="nav-link navbar-brand" href="/genres">Genres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-brand" href="/tracks">Tracks</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
      @yield('main')
  </div>

</body>
</html>
