<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
    <section id="app-layout">
      @include('includes.side-menu')
      <div class="welcome-jumbo">
        <div class="status">New</div>
        <h1>Noir Blend</h1>
        <img src="https://www.pngkey.com/png/full/800-8004133_kahla-cold-brew-black-russian.png" class="coffee-jumbo">
      </div>
    </section>
    @yield('content')
    
    </body>
</html>
