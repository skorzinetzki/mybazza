<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MyBazza @yield('title')</title>
        <meta name="viewport" content="width=device-width">
        {{ HTML::style('css/mybazza.css') }}
        {{ Asset::container('bootstrapper')->styles() }}
        {{ Asset::container('bootstrapper')->scripts() }}
    </head>
    <body>
        <div class="container">
            @section('navigation')
                <div class="row">
                    <div class="span3 offset6 text-right">
                        {{ HTML::link('article/create', 'Artikel einstellen') }}
                        <a href="#foobar">Mein Konto</a>
                    </div>
                    <div class="span3 text-right">
                         <a href="#foobar">Über MyBazza</a>
                         <a href="#foobar">Impressum</a>
                    </div>
                </div>
                <div class="row">
                    <div class="span6">{{ HTML::image('img/logo.svg', 'MyBazza', array('width' => 300)) }}</div>
                    <div class="span6 text-right">
                        <form class="form-search">
                            <div class="input-append">
                                <input type="text" class="span4 search-query">
                                <button type="submit" class="btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            @yield_section

            @section('content')
            @yield_section

            @section('footer')
            @yield_section
        </div>
    </body>
</html>