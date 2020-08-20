<?php

namespace Josseph\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Josseph\Contact\Models\Contact;
class ContactController extends Controller
{
    //
    public function index() {
    	return view('contact::contact');
    }

    public function store() {
    	dd($this->sayMyNameWithTheGivenOne("Josseph" , request()->name));
    	// Contact::create(request()->all());
    	// return request()->all();
    }

    public function sayMyNameWithTheGivenOne($nameone , $nametwo) {
    	return config('contact.my_name') . " says hi to " . $nametwo;
    }
}
