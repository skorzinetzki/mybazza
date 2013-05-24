<a href="/article/detail/{{ $article->id }}">
    <div class="article text-right" style="background-image: url('{{ $article->imgPath() }}');">
        {{ Typography::muted('Credits: ' . $article->creditpoints) }}
    </div>
</a>