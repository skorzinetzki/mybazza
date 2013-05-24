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
                'category_id' => Input::get('category_id'),
                'condition_id' => Input::get('condition_id'),
                'maturity_id' => Input::get('maturity_id'),
                'price' => Input::get('price')
            );

            // define validation rules for article
            $rules = array(
                'name' => 'required|min:5|max:128',
                'description' => 'required',
                'category_id' => 'required',
                'condition_id' => 'required',
                'maturity_id' => 'required',
                'price' => 'required|numeric',
                'image' => 'image|mimes:jpg'
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

            $article->saveImage(Input::file('image'));

            // redirect to ratesuggestion of new article and creditpoints
            return Redirect::to('article/ratesuggestion/'.  $article->id);
        }

		return View::make('article.create')
            ->with('categories', Category::lists('name','id'))
            ->with('conditions', Condition::lists('status','id'))
            ->with('maturities', Maturity::lists('age','id'));
	}

	public function action_ratesuggestion($articleId)
	{
        // handle data that was sent
        if (Request::method() == 'POST') {
            // catch data from request
            $articleData = array(
                'creditpoints' => Input::get('creditpoints')
            );

            // define validation rules for article
            $rules = array(
                'creditpoints' => 'required|numeric'
            );

            $validator = Validator::make($articleData, $rules);
            if ( $validator->fails() )
            {
                // redirect back to the form
                // with errors and input
                return Redirect::to('article/ratesuggestion/' . $articleId)
                    ->with_errors($validator)
                    ->with_input();
            }

            // get the article and save the creditpoints
            $article = Article::find($articleId);
            $article->creditpoints = $articleData['creditpoints'];
            $article->save();

            // redirect to viewing new article
            return Redirect::to('article/detail/'.  $article->id);
        }

		return View::make('article.ratesuggestion')->with('article', Article::find($articleId));
	}

}
