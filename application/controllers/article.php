<?php

class Article_Controller extends Base_Controller {

    /**
     * Standard widget list representation of articles
     * @return View Index-View
     */
	public function action_index()
	{
		return View::make('article.index')->with('articles', Article::all());
	}

    /**
     * Should not be called directly, but is currently available for ShowCase purposes
     * @param int $articleId
     * @return View Widget-View
     */
	public function action_widget($articleId)
	{
		return View::make('article.widget')->with('article', Article::find($articleId));
	}

	public function action_detail()
	{
		// code here..

		return View::make('article.detail');
	}

	public function action_create()
	{
		// code here..

		return View::make('article.create');
	}

	public function action_ratesuggestion()
	{
		// code here..

		return View::make('article.ratesuggestion');
	}

}
