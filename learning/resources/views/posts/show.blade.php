
@extends('layouts.app')
@section('show')
@section('title')
show
 @endsection
<div class="card" >
  <div class="card-header">
    Post Info
  </div>
  <div>
    <h5 class="card-title mt-2">
        Title: PHP
    </h5 class="card-text">
    <p> Description: description</p>
  </div>
</div>
<br>
  <div class="card" >
  <div class="card-header">
    Post Creator Info
  </div>
  <div>
    <h5 class="card-title mt-2">
        Name: PHP
    </h5 class="card-text">
    <p> Email: description</p>
    <p> Created At: 15-5-2025</p>
  </div>

</div>

@endsection
