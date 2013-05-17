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

	public function action_detail($articleId)
	{
		return View::make('article.detail')->with('article', Article::find($articleId));
	}

	public function action_create()
	{
        // handle data that was sent
        if (Request::method() == 'POST') {
            // catch data from request
            $articleData = array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'category_id' => Input::get('category_id')
            );

            // define validation rules for article
            $rules = array(
                'name' => 'required|min:5|max:128',
                'description' => 'required',
                'category_id' => 'required'
            );

            $validator = Validator::make($articleData, $rules);
            if ( $validator->fails() )
            {
                // redirect back to the form
                // with errors and input
                return Redirect::to('article/create')
                    ->with_errors($validator)
                    ->with_input();
            }

            // create the new article
            // the step with creditpoint suggestion is still missing
            $article = new Article($articleData);
            $article->save();

            // redirect to viewing new article
            return Redirect::to('article/detail/'.  $article->id);
        }

		return View::make('article.create')->with('categories', Category::lists('name','id'));
	}

	public function action_ratesuggestion()
	{
		// code here..

		return View::make('article.ratesuggestion');
	}

}
