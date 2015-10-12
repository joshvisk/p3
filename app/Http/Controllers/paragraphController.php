<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ParagraphController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET & POST and returns the Lorem Ipsum generation page *
    */
    public function getIndex() {
    	return view('paragraph');
    }

    /**
    * Responds to requests to GET & POST and returns the Random User generation page *
    */

    public function postIndex() {
    	return view('paragraph');
    }
}