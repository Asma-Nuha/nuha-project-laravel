<!DOCTYPE html>
<html>
    <head>
        <title>Perkenalan</title>
        @vite('resources/css/app.css')
    </head>
    <body>
    <h1 class="text-3xl font-bold text-violet-950	bg-fuchsia-100 p-4 text-center">
    Hello world! im {{ $name }}!!!
  </h1>
  <p class="text-3xl font-bold text-violet-950	bg-fuchsia-100 p-4 text-center">
    i live in {{ $address }}, and my email is {{ $email }}
    </body>
</html>