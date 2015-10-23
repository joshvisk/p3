@extends('layouts.master')

@section('title')
	- Paragraph Generator
@stop

<!-- adds content to the master view -->
@section('content')
	<?php
		// function will create Lorem Ipsum text into paragraph form
    function displayParagraphs($count) {
      $result = '';
			// object is created
      $generator = new Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs($count);
			// loop to create user requested number of paragraphs
      for ($i=0; $i < $count; $i++) {
        $result .= "<p>" . $paragraphs[$i] . "</p>";
      }
      return $result;
    }
  ?>
  <!-- creates breadcrumbs and renders on the view -->
  @section('breadcrumb')
		{!! Breadcrumbs::render() !!}
	@stop

  <h2>Lorem Ipsom Paragraphs</h2>
  
   <!-- Displays validation error messages if present -->
  @if(count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
    
    <!-- Simple form to take the number of requested lorem ipsum paragraphs -->
  <form method='POST' action='/paragraph'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <fieldset>
      <label>How many paragraphs would you like to generate?</label>
      <br />
      <input type='text' name='count'>
      <input type='submit' name='submit' value='Submit'>
    </fieldset>
  </form>
  <br />
  <!-- calls function to create paragraphs and displays the returned bits -->
  <?php
    if (isset($_POST['submit'])) {
      echo displayParagraphs($_POST['count']);
    }
  ?>
@stop
