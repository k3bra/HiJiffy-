<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <title>HiJiffy Test</title>

        <script defer src="{{ mix('js/app.js') }}" type="text/javascript" ></script>

        <style></style>
    </head>
    <style>

        .background {
            background-color:#EDF2F7;
            min-height: 100vh;

        }
    </style>
    <body >
        <div id="app" class="background">
            <user-search></user-search>
        </div>
    </body>
</html>
