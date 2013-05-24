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
            <p>{{ $article->description }}</p>
            <dl class="dl-horizontal">
                <dt>Category</dt>
                <dd>{{ $article->category->name }}</dd>
                <dt>Original price</dt>
                <dd>{{ $article->price }}</dd>
            </dl>
        </div>
        <div class="span2"> @include('article.widget') </div>
    </div>
    <div class="row">
        <div class="span6 offset1">
            {{ Form::actions(array(Button::primary_submit('Buy!'), Form::button('Ask Question'))) }}
        </div>
    </div>
@endsection

@section('footer')
@endsection