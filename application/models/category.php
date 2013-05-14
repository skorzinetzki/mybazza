<?php

class Category extends Eloquent {
    public static $timestamps = true;
    
    public function articles()
    {
        return $this->has_many('Article');
    }
    
    public function children() {
        return $this->has_many('Category','category_id');
    }
    
    public function parent()
    {
        return $this->belongs_to('Category','category_id');
    }
}