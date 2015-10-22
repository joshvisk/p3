@extends('layouts.master')

@section('title')
	- Paragraph Generator
@stop


@section('content')
	<?php
    function displayParagraphs($count) {
      $result = '';
      // $count = $request->input('count');
      $generator = new Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs($count);
      for ($i=0; $i < $count; $i++) {
        $result .= "<p>" . $paragraphs[$i] . "</p>";
      }
      return $result;
    }
  ?>
  
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
    <input type='text' name='count'>
    <input type='submit' name='submit' value='Submit'>
  </form>
  <br />
  <?php
    if (isset($_POST['submit'])) {
      echo displayParagraphs($_POST['count']);
    }
  ?>
@stop
