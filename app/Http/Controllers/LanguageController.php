<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Http\Request;

class languageController extends Controller
{
    public function index() {
    	
    	if(!\Session::has('locale')) {
    		\Session::put('locale', Input::get('locale'));

    	} else {
    		Session::set('locale', Input::get('locale'));
    	}

    	return Redirect::back();
    }
}
