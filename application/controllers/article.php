<?php

class Article_Controller extends Base_Controller {

	public function action_index()
	{
		// code here..

		return View::make('article.index');
	}

	public function action_widget()
	{
		// code here..

		return View::make('article.widget');
	}

	public function action_list()
	{
		// code here..

		return View::make('article.list');
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
