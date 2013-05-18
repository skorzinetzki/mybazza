<!DOKTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width">
        {{ Asset::container('bootstrapper')->styles() }}
        {{ Asset::container('bootstrapper')->scripts() }}
    </head>
    <body> 
        @yield('content')
    </body>
</html>