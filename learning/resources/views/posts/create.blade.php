
@extends('layouts.app')
@section('create')
@section('title')
create
 @endsection


 <!-- action: url to submit -->
  <!-- method: get or post -->
<div class="d-flex justify-content-center">
        <form method="POST" action="{{route('posts.store')}}"  style="width: 800px;">
        @csrf  
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
    <label class="form-label" for="post_creator">  Post Creator </label>
     <select class="form-control" 
    name="post_creator"
    id="post_creator"
     
     >
  <option value="1">Ziad</option>
  <option value="2">Ahmed</option>
</select>
   </div>
   <br>
   <div>
    <button type="submit" class="btn btn-success">submit</button>
   </div>
</form>
</div>


@endsection
