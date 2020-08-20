<?php

namespace App;

trait Countable {
    public static  function countLaptops() {
        return Laptop::where('laptopable_type' , static::class)->get()->count();
    }

    public function addLaptop($data) {
        if($this->laptop()->create($data)) {
            return $this->laptop->last();
        }
    }
}