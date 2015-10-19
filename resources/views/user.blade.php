@extends('layouts.master')

@section('title')
  Random User
@stop

@section('content')
	<?php
  function displayUsers($count) {
    $i = 1;
    $result = '';
    while ($i <= $count) {	
      // use the factory to create a Faker\Generator instance
      $faker = Faker\Factory::create();	
      // generate data by accessing properties
      $result .= $faker->name . "<br />";
      $result .= $faker->address . "<br />";
      // $result .= $faker->text . "<br />";
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
  
  <!-- Simple form to take the number of requested random users -->
  <form method='POST' action='/user'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <fieldset>
      <label>How many users?</label><br />
      <input type='text' name='count'>
      <input type='submit' name='submit' value='Submit'>
    </fieldset>
  </form>
  <br />
  
  <?php
    if (isset($_POST['submit'])) {
      echo displayUsers($_POST['count']);
    }
  ?>

@stop