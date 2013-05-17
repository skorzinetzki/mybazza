<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MyBazza @yield('title')</title>
        <meta name="viewport" content="width=device-width">
        {{ Asset::container('bootstrapper')->styles() }}
        {{ Asset::container('bootstrapper')->scripts() }}
    </head>
    <body>
        <div class="container">
            @section('navigation')
                <p>general menu-items should be here...</p>
            @yield_section

            {{ Alert::info('<i class="icon-info-sign"></i> no layout yet...')->open() }}

            @section('content')
            @yield_section

            @section('footer')
            @yield_section
        </div>
    </body>
</html>