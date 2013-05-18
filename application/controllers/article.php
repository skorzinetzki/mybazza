<?php

class Article_Controller extends Base_Controller {

    public $restful = true;


    public function get_index()
    {

		return View::make('main')
                        ->with('categories',Category::all())
                        ->with('articles',Article::all())
                        ->with('orderedCategories',  Category::order_by('name')->get());
	}
        
   public function get_newArticleView()
   {
       return View::make('article.newArticle')
               ->with('title','Neuen Artikel einstellen')
               ->with('categories',  Category::order_by('name')->get());
   }

}
