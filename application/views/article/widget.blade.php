{{--
    Article Widget Layout

    Description:
        This Layout is used to display one shorted view for displaying in a "list" of articles.
    Variables:
        - $article = should contain one Article Model Object
--}}

<div class="span4">
    <div>
        {{ Image::polaroid('http://lorempixel.com/360/180/animals/', 'Alternative Description', array('title' => 'My Picture Title')) }}
    </div>
    <h3>{{ $article->name }}</h3>
    {{ Typography::horizontal_dl(array('Category' => $article->category->name, 'Description' => $article->description, 'Creditpoints' => $article->creditpoints)) }}
</div>