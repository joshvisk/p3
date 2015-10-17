@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-lg-2 col-lg-offset-4 col-md-offset-4 col-md-2 col-sm-offset-3 col-sm-3 col-xs-offset-3 col-xs-3">
    <p><a class="btn btn-success btn-lg" href="/user" role="button">User Generator</a> </p>
  </div>
  <div class="col-lg-2 col-md-6 col-sm-6">
    <p><a class="btn btn-primary btn-lg" href="/paragraph" role="button">Lorem Ipsum Generator</a> </p>
  </div>
</div>
<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, vel minima quis commodi atque animi eum unde culpa magnam vero.</p>
<div class="text-center">
  <button type="submit" class="btn btn-success btn-lg">User Generator</button>
  <button type="submit" class="btn btn-primary btn-lg">Lorem Ipsum Generator</button>
</div>
@stop