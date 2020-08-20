<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class Student extends Model 
{
    //
    use Countable;
    protected $guarded = [];

    public function laptop() {
    	return $this->morphMany("App\Laptop" , 'laptopable');
    }

    public static  function student_exists( $student_id)   {
        return Student::where("id" , $student_id )->get()->count() > 0;
    }


    
}
