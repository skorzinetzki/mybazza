<?php

class Article extends Eloquent {
    public static $timestamps = true;
    public static $imgSize = 140;

    public static function path() {
        return 'img/article/';
    }

    public function category()
    {
        return $this->belongs_to('Category');
    }
    
    public function condition()
    {
        return $this->belongs_to('Condition');
    }
    
    public function maturity()
    {
        return $this->belongs_to('Maturity');
    }

    public function imgPath() {
        return Article::path() . $this->id . '.jpg';
    }

    public function saveImage($image) {
        if (!is_array($image) || !isset($image['error']) || $image['error'] != 0) {
            return;
        }

        Resizer::open($image)
            ->resize(Article::$imgSize , Article::$imgSize , 'crop')
            ->save(path('public') . $this->imgPath(), 90);
    }

    public function rateSuggestion() {
        // here will be some logic
        return 0;
    }
}