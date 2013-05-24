@layout('main')

@section('title')
{{ $article->name }}
@endsection

@section('navigation')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="span12"><h4>{{ $article->name }}</h4></div>
    </div>
    <div class="row">
        <div class="span6 offset1">
            Creditpoints: {{ $article->creditpoints }}
        </div>
    </div>
@endsection

@section('footer')
@endsection