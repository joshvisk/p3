@extends('layouts.master')

@section('stylesheet')
	<link rel="stylesheet" href="../css/styles.css">
@stop

@section('title')
	 - Welcome
@stop

@section('content')
<div class="row">
	<p>This application will allow a user to request paragraphs of Lorem Ipsum text and randomly generate user date.</p>
  <p>Lorem Ipsum text has been used by typesetters and most recently, by web designers as "placeholder" or "dummy" text.  It is very useful for design and testing purposes.</p>
  <div class="example"><b>Example:</b><br />Imperdiet auctor felis libero ornare habitasse nec elit, felis inceptos tellus inceptos cubilia quis mattis faucibus, sem non odio fringilla class aliquam. Dui eget integer nibh dolor commodo venenatis, ut molestie semper adipiscing amet. Tempor feugiat donec sapien malesuada auctor sapien arcu inceptos aenean, consequat metus litora mattis vivamus feugiat arcu adipiscing mauris, primis ante ullamcorper ad nisi lobortis arcu per.</div>
  <p> </p>
	<p>The random user generator will create fake names, address, and a short Lorem Ipsum blurb.</p>
  <div class="example"><b>Example:</b><br /><h4>John Smith</h4><br /><i>1234 56th Ave SW Seattle, WA 98001</i><br />Tempor feugiat donec sapien malesuada auctor sapien arcu inceptos aenean, consequat metus litora mattis vivamus feugiat arcu adipiscing mauris, primis ante ullamcorper ad nisi lobortis arcu per.</div>  
  <hr>
  <div class="text-center">
    <form method="get" action="/user" class="welcomeButton">
	    <button type="submit" class="btn btn-success btn-lg">User Generator</button>
    </form>
		<form method="get" action="/paragraph" class="welcomeButton">
  	  <button type="submit" class="btn btn-primary btn-lg">Lorem Ipsum Generator</button>
		</form>
  </div>
</div>
@stop