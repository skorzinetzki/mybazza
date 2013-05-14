<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MyBazza</title>
        <meta name="viewport" content="width=device-width">
        {{ Asset::container('bootstrapper')->styles() }}
        {{ Asset::container('bootstrapper')->scripts() }}
    </head>
    <body>
      {{ Typography::info('<i class="icon-info-sign"></i> Bisher kein Layout vorhanden.') }}
      @if  ( $categories )
      
      {{ Table::striped_bordered_hover_condensed_open() }}
      {{ Table::headers('ID', 'Name') }}
      {{ Table::body($categories)->ignore('created_at', 'updated_at', 'category_id') }}
      {{ Table::close() }}
      @endif
      
      @foreach ($categories as $category)
        The category name is {{ $category->name }}. 
        @if ( $category->parent ) 
          And its parent is {{ $category->parent->name }}.
        @endif
        
        @if ( $category->children )
          Children:
          @foreach ($category->children as $child)
            {{ $child->name }}!
          @endforeach
        @endif
      @endforeach
      
      @foreach ($articles as $article)
        Article {{ $article->name }} is in Category {{ $article->category->name }}
      @endforeach
    </body>
</html>