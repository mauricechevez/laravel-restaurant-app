<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <title>Food Circles - Burgers and More</title>
        <link rel="stylesheet" href="/css/app.css">
        <!-- Fonts -->

    </head>
    <body class="antialiased">
    <body>
  <section id="app-layout">
    @include('includes/welcome-sidemenu')
    <div class="welcome-jumbo">
      <div class="status">NEW</div>
      <h1>Billy Burger</h1>
      <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
    </div>
  </section>
@yield('content')

</body>
    </body>
</html>
