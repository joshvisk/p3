<?php

// Initial GET route to display the Homepage

Route::get('/', function () {
    return view('welcome');
});

// Route uses the ParagraphController to direct the user to the Lorem Ipsum Paragraph generation page via GET or POST 
// Controllers are being used to establish Routing/Controller Knowledge

Route::get('/paragraph', 'ParagraphController@getIndex');
Route::post('/paragraph', 'ParagraphController@postIndex');

// Route uses the UserController to direct the user to the Random User generation page via GET or POST 
// Controllers are being used to establish Routing/Controller Knowledge

Route::get('/user', 'UserController@getIndex');
Route::post('/user', 'UserController@postIndex');