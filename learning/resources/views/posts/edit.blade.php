
@extends('layouts.app')
@section('create')
@section('title')
edit
 @endsection


 <!-- action: url to submit -->
  <!-- method: get or post -->
<div class="d-flex justify-content-center">
    <!-- put/patch/delete ===> post in form  -->
        <form method="POST" action="{{ route('posts.update',1) }}"  style="width: 800px;">
        @csrf  
        @method('PUT') 
        <!-- @csrf:::  protection issue solution:: any form(POST Request) must contain @csrf -->


     <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input
    name="title"
   class="form-control"
        id="exampleFormControlInput1"
        rows="1"
    >
</div>

<div class="mb-3">
    <label for="exampleFormControlTextarea2" class="form-label">Description</label>
    <textarea
    name="description"
        class="form-control"
        id="exampleFormControlTextarea2"
        rows="3"
    ></textarea>

    </div>

    
   <div>
    <label class="form-label" for="postCreator">  Post Creator </label>
     <select class="form-control" 
    name="postCreator"
    id="postCreator"
     
     >
  <option value="ziad">Ziad</option>
  <option value="ahmed">Ahmed</option>
</select>
   </div>
   <br>
   <div>
    <button type="submit" class="btn btn-primary">edit</button>
   </div>
</form>
</div>


@endsection
