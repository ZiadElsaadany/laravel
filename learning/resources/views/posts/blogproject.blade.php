@extends("layouts.app")
@section("allposts")
@section('title')
posts
 @endsection
 <div class="text-center mt-4">
    <br>
    <div >
<a type="button" class="btn btn-success"  href="{{route('posts.create')}}">Create Post</a>
   </div>
    <br>

<div>
    <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Post By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    {{-- @dd($allPosts) --}}

    @foreach ($allPosts as $post )
       <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>

      <td>{{$post['posted_by']}}</td>
      <td>{{$post['created_at']}}</td>
      <td>

        {{-- href="/posts/{{$post['id']}}" --}}

        {{-- shortcut name and parameter to routing  --}}
        <a href="{{route('posts.show',parameters: $post['id'])}}"   conte  type="button" class="btn btn-primary">View</a>

           <form style="display: inline;" method="POST" action="{{ route('posts.destroy',parameters: $post['id']) }}" 
           
           onsubmit="return confirmDelete()"
           >
        @csrf  
        @method('DELETE') 
          <button type="submit" class="btn btn-danger">Delete</button>

        </form>
<a type="button" class="btn btn-info" href="{{ route('posts.edit',$post['id']) }}">Edit</a>

      </td>
    </tr>

    @endforeach

  </tbody>
</table>
</div>

   </div>
   <!-- to show warning dialog when delete post from posts -->
   <script>
  function confirmDelete() {
    return confirm("Are you sure you want to delete this post?");
  }
</script>

@endsection
