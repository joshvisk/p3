@extends('layouts.master')

@section('title')
  - Random User Generator
@stop

@section('breadcrumb')
	{!! Breadcrumbs::render() !!}
@stop

@section('content')
	<?php
  function displayUsers($count) {
    $i = 1;
    $result = '';
    while ($i <= $count) {	
      // use the factory to create a Faker\Generator instance
      $faker = Faker\Factory::create();	
      // generate data by accessing properties of faker object
      $result .= "<h4>" . $faker->name . "</h4><br />";
			if (isset($_POST['address'])) {
	      $result .= "<i>" . $faker->address . "</i><br />";
			}
 			if (isset($_POST['blurb'])) {
				$result .= $faker->text . "<br />";
			}
      $result .= "<br />";
      $result .= "<hr>";
      $i++;
    }      
      return $result;
  }  
  ?>
  <h2>Random User Generator</h2>
  
  <!-- Displays validation error messages if present -->
  @if(count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif
  
  <!-- Simple form to take the number of requested random users --> <br />
  <form method='POST' action='/user'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <fieldset>
      <label>How many users?</label>
      <br />
      <input type='text' name='users'>
      <input type='submit' name='submit' value='Generate'>
    </fieldset>
    <fieldset>
      <input type="checkbox" name="address" id="address" checked>
      <label for="address">Address</label>
      <input type="checkbox" name="blurb" id="blurb" checked>
      <label for="blurb">Blurb</label>
    </fieldset>
  </form>

<?php
    if (isset($_POST['submit'])) {
      echo displayUsers($_POST['users']);
    }
  ?>
  
@stop