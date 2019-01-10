<!DOCTYPE html>
<html lang="en">

  <head>

    @include('partials.head')

  </head>

  <body>

    @include('partials.navbar')

    @include('partials.message')

    @yield('header')

    <div class="container">
      @yield('content')
    </div>
    <!-- /.container -->

    @include('partials.footer')

  </body>

</html>