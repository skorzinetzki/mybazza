<?php

class Maturity extends Eloquent {
    public static $timestamps = true;

    public static function baseMaturities () {
        return Category::where_null('maturity_id')->get();
    }

    public function articles() {
        return $this->has_many('Article');
    }

}