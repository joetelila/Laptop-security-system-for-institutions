<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Laptop;
class Guest extends Model
{
    //
    protected $guarded = [];

    use Countable;

    public function laptop() {
    	return $this->morphMany("App\Laptop" , 'laptopable');
    }

   
}
