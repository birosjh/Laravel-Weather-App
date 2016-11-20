<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Weather App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet" type="text/css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/skycons/1396634940/skycons.js"></script>
        <script type="text/javascript" src="js/app.js"></script>

        </script>

    <body>

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">The Weather</a>
          </div>
          <ul class="nav navbar-nav">
            @yield('navigation-bar')
          </ul>
        </div>
      </nav>

      <div class="time-blocks">

        @yield('content')

      </div>


    </body>
</html>
