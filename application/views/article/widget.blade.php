{{--
    Article Widget Layout

    Description:
        This Layout is used to display one shorted view for displaying in a "list" of articles.
    Variables:
        - $article = should contain one Article Model Object
--}}

<div class="article" style="background-image: url('{{ $article->imgPath() }}');">
    <h3>{{ $article->name }}</h3>
    {{-- Typography::horizontal_dl(array('Category' => $article->category->name, 'Description' => $article->description, 'Creditpoints' => $article->creditpoints)) --}}
</div>