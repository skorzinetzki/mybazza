<?php

class Article extends Eloquent {
    public static $timestamps = true;
    
    public function category()
    {
        return $this->belongs_to('Category');
    }
}