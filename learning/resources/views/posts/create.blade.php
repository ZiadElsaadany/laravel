
@extends('layouts.app')
@section('create')
@section('title')
create
 @endsection


 <!-- action: url to submit -->
  <!-- method: get or post -->
<div class="d-flex justify-content-center">
        <form action="" method="" style="width: 800px;">
     <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input
   class="form-control"
        id="exampleFormControlTextarea1"
        rows="1"
    >
</div>

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea
        class="form-control"
        id="exampleFormControlTextarea1"
        rows="3"
    ></textarea>


   <div>
    <label class="form-label">  Post Creator </label>
     <select class="form-control" >
  <option value="1">Ziad</option>
  <option value="2">Ahmed</option>
</select>
   </div>
   <br>
   <div>
    <button type="button" class="btn btn-success">submit</button>
   </div>
</form>
</div>


@endsection
