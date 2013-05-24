<?php

class Article extends Eloquent {

    public static $timestamps = true;
    public static $imgSize = 140;

    public static function path() {
        return 'img/article/';
    }

    public function calculateRateAverage() {
        return DB::table('articles')->where('category_id', '=', $this->category_id)->avg('creditpoints');
    }

    public function category() {
        return $this->belongs_to('Category');
    }

    public function condition() {
        return $this->belongs_to('Condition');
    }

    public function maturity() {
        return $this->belongs_to('Maturity');
    }

    public function imgPath() {
        return Article::path() . $this->id . '.jpg';
    }

    public function price() {
        return $this->price();
    }

    public function rate() {
        return $this->rate();
    }

    public function rateSuggestion() {
        // calculate current rate
        $rateCurrent = round(($this->maturity()->factor() + $this->condition()->factor()) * 1, 5 + $this->price() / 10);
        // get average rate of items of the same category
        $rateAverage = $this->calculateRateAverage();
        // get average of rateCurrent and rateAverage
        $rateSuggested = round(($rateCurrent + $rateAverage) / 2, 0);

        return $rateSuggested;
    }

    public function saveImage($image) {
        if (!is_array($image) || !isset($image['error']) || $image['error'] != 0) {
            return;
        }

        Resizer::open($image)
                ->resize(Article::$imgSize, Article::$imgSize, 'crop')
                ->save(path('public') . $this->imgPath(), 90);
    }

}