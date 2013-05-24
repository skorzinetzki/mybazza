@layout('main')

@section('title')
Home
@endsection

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
        @forelse ($categories as $category)
            @if ( $category->children )
                @foreach ($category->children as $child)
                    <a href="{{ url('article/index') }}" alt="{{ $category->name . ': ' . $child->name }}">
                    <div class="category text-right" style="background-image: url('img/{{ $child->name }}.png');">{{ $category->name . ': ' . $child->name }}</div>
                    </a>
                @endforeach
            @else
                <a href="{{ url('article/index') }}" alt="{{ $category->name }}">
                <div class="category text-right">{{ $category->name }}</div>
                </a>
            @endif
        @empty
            <div>{{ Typography::warning('Houston, We\'ve Got a Problem') }}</div>
        @endforelse
    </div>
    <div class="span8 offset2">
        {{ render_each('article.widget', $articles, 'article') }}
    </div>
</div>
@endsection