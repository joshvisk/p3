@extends('layouts.master')

@section('title')
	Paragraph Generation
@stop

@section('content')
<h2>Lorem Ipsom Paragraphs</h2>
<br />
<?php
	$result = "";
	$paragraphCount = 5;
  $generator = new Badcow\LoremIpsum\Generator();
  $paragraphs = $generator->getParagraphs($paragraphCount);
	for ($i=0; $i < $paragraphCount; $i++) {
		$result .= "<p>" . $paragraphs[$i] . "</p>";
	}
  echo $result;
?>
@stop
