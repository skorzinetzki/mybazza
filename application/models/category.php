<?php

class Category extends Eloquent {
    public static $timestamps = true;

    public static function baseCategories () {
        return Category::where_null('category_id')->get();
    }

    public function articles() {
        return $this->has_many('Article');
    }

    public function children() {
        return $this->has_many('Category','category_id');
    }

    public function parent() {
        return $this->belongs_to('Category','category_id');
    }

    public function hasParent() {
        if ($this->parent()) {
            return true;
        } else {
            return false;
        }
    }
}