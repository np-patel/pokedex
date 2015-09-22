<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="/css/foundation.css" />
    <script src="/js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
      <div class="columns">
        <nav>
          <ul class="inline-list">
            <li><a href="/">Home</a></li>
            <li><a href="/pokedex">Pokedex</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/auth/register">Register</a></li>
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/pokecentre">Pokecentre</a></li>
            <li><a href="/auth/logout">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>
    
    @yield('content')
    
    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
