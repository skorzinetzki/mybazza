{{--
    Article Widget Layout

    Description:
        This Layout is used to display one shorted view for displaying in a "list" of articles.
    Variables:
        - $article = should contain one Article Model Object
--}}

<div class="article text-right" style="background-image: url('{{ $article->imgPath() }}');">
    {{ Typography::muted('Credits: ' . $article->creditpoints) }}
</div>