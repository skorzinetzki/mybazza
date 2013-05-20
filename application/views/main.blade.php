<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MyBazza @yield('title')</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/mybazza.css">
        {{ Asset::container('bootstrapper')->styles() }}
        {{ Asset::container('bootstrapper')->scripts() }}
    </head>
    <body>
        @section('navigation')
        <div class="row">
            <div class="span3 offset6 text-right">
                <a href="#foobar">Artikel einstellen</a>
                <a href="#foobar">Mein Konto</a>
            </div>
            <div class="span3 text-right">
                 <a href="#foobar">Über MyBazza</a>
                 <a href="#foobar">Impressum</a>
            </div>
        </div>
        <div class="row">
            <div class="span6"><h1>MyBazza Logo</h1></div>
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
        <div class="row">
            <div class="span6">
                <p class="lead">
                    Auf myBazza kann Du nicht mehr benötigte Kinderartikel
                    wie Kleidung oder Spielzeug mit anderen tauschen. Für Dich ist die Nutzung
                    kinderleicht und der Versand besonders günstig.
                </p>
            </div>
            <div class="span2">
                <h1>1.</h1>
                <p>Eigene Artikel verkaufen und Credits erhalten.</p>               
            </div>
            <div class="span2">
                <h1>2.</h1>
                <p>Artikel aus dem Angebot auswählen und bequem mit Credits bezahlen.</p>
            </div>
            <div class="span2">
                <h1>3.</h1>
                <p>Neuen Artikel erhalten und glücklich sein.</p>
            </div>
        </div>
        <div class="row">
            <div class="span2"><h4>Stöbern in...</h4></div>
            <div class="span8 offset2"><h4>Tolle Angebote für Dich...</h4></div>
        </div>

        <div class="row">
            <div class="span2">
                @if ( $categories )
                    @foreach ($categories as $category)
                        {{--
                        @if ( $category->children )
                            @foreach ($category->children as $child)
                                <div class="category">Bild: {{ $category->name }} - {{ $child->name }}</div>
                            @endforeach
                        @else
                            <div class="category">Bild: {{ $category->name }}</div>
                        @endif
                        --}}
                        <div class="category">Bild: {{ $category->name }}</div>
                    @endforeach
                @endif
            </div>
            <div class="span8 offset2">
                @foreach ($articles as $article)
                    <div class="article">Artikel: {{ $article->name }}</div>
                @endforeach
            </div>
            @yield_section

            @section('footer')
            @yield_section
        </div>
    </body>
</html>