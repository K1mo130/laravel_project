<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
                    
        <!-- Styles -->
        <link rel="stylesheet" href="/style.css">

        <title>Valve</title>
    </head>
    <body class="antialiased">
        @include('navigation-menu')
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>