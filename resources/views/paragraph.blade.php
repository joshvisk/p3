@extends('layouts.master')

@section('title')
	- Paragraph Generator
@stop

@section('includes')
	<?php	require("logic.php"); ?>
@stop

<!-- adds content to the master view -->
@section('content')

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