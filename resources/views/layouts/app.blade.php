<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Website</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
  <div class="container">
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif
    <div class="row pt-4">
      <div class="col-8">
        @include('inc.messages')
        @yield('content')
      </div>
      <div class="col-4">
        @include('inc.sidebar')
      </div>
    </div>
  </div>
  <footer id="footer" class="text-center">
    <div class="container">
      <span class="text-muted">Copyright {{now()->year}} &copy; Patricio Quezada</span>
    </div>

  </footer>

  </body>
</html>
