@layout('main')

@section('title')
Article index
@endsection

@section('navigation')
    @parent
    <p>specific menu-items should be here.</p>
@endsection

@section('content')
    <div class="row">
        {{ render_each('article.widget', $articles, 'article') }}
    </div>
@endsection

@section('footer')
@endsection