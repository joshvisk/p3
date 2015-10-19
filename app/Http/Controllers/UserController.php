<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

	public function postIndex(Request $request) {
		
		// Validate the request data
    $this->validate($request, [
        'count' => 'required',
    ]);

		
		return view('user');
	}

}