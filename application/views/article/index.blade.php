@layout('main')

@section('title')
Articles
@endsection

@section('navigation')
    @parent
    <div class="row">
        <div class="span4">
            <ul class="breadcrumb">
                <li>{{ HTML::link('/', 'Home') }} <span class="divider">/</span></li>
                <li>{{ HTML::link('somewhere', 'Kleidung') }} <span class="divider">/</span></li>
                <li class="active">{{ HTML::link('somewhere else', 'Jacken') }}</li>
            </ul>
        </div>
        {{ Form::inline_open() }}
        <div class="span7 offset1">
            {{ Form::label('gender', 'Gender ') }}&nbsp;{{ Form::span2_select('gender', array('Boy', 'Girl')) }}
            {{ Form::label('size', 'Size ') }}&nbsp;{{ Form::span1_select('size', array('56', '62', '68', '74', '80', '86', '92')) }}
            {{ Form::label('credits', 'Credits ') }}&nbsp;{{ Form::span1_select('credits', array('10', '12', '14', '16', '18', '20')) }}
            {{ Form::label('brand', 'Brand ') }}&nbsp;{{ Form::span2_select('brand', array('Steif', 'Esprit', 's\'Oliver', 'Sterntaler')) }}
        </div>
        {{ Form::close() }}
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="span12">
        {{ render_each('article.widget', $articles, 'article') }}
        </div>
    </div>
@endsection

@section('footer')
@endsection