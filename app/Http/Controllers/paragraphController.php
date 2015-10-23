<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function postIndex(Request $request) {
			// Validate the request data
			$this->validate($request, [
					'count' => 'required|integer|min:1|max:20',
			]);
    	return view('paragraph');
    }
}