<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $guarded = [];
    use Countable;
    public function laptop() {
    	return $this->morphMany("App\Laptop" , 'laptopable');
    }

   
    
}
