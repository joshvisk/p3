<?php

// Initial GET route to display the Homepage

Route::get('/', array('as' => 'home', function () {
	return view('welcome');
}));

// Route uses the ParagraphController to direct the user to the Lorem Ipsum Paragraph generation page via GET or POST 
// Controllers are being used to establish Routing/Controller Knowledge

Route::get('/paragraph', ['as' => 'paragraphs', 'uses' => 'ParagraphController@getIndex']);
Route::post('/paragraph', ['as' => 'paragraphs', 'uses' => 'ParagraphController@postIndex']);

// Route uses the UserController to direct the user to the Random User generation page via GET or POST 
// Controllers are being used to establish Routing/Controller Knowledge

Route::get('/user', ['as' => 'users', 'uses' => 'UserController@getIndex']);
Route::post('/user', ['as' => 'users', 'uses' => 'UserController@postIndex']);

// Route allows the developer to view logs from the \logs uri
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');