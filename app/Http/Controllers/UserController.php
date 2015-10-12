<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET & POST *
    */
    public function getIndex() {
    	return view('user');
    }

    public function postIndex() {
    	return view('user');
    }
}