<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="logo\image.png" type="image/x-icon">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="  bg-gradient-to-r from-yellow-300 to-orange-400 p-4">
        <div class="container mx-auto flex justify-between">
            <div>
                <a href="/" class="text-black font-bold">Accueil</a>
                <a href="/A-Propos" class="text-black  ml-4">À Propos</a>
                <a href="/services" class="text-black  ml-4">Services</a>
                <a href="/contact" class="text-black  ml-4">Contact</a>
            </div>
        </div>
    </nav>
    @yield('content')

</body>
</html>
