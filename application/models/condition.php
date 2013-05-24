<?php

class Condition extends Eloquent {
    public static $timestamps = true;

    public static function baseConditions () {
        return Category::where_null('condition_id')->get();
    }

    public function articles() {
        return $this->has_many('Article');
    }

}