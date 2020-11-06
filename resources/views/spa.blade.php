<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>spa</title>
    </head>
    <body>
        <div id="app">
            <router-link to="/home">Home</router-link>
            <router-link to="/category">Category</router-link>

            <router-view></router-view>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
