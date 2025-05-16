@extends("layouts.app")
@section("allposts")
@section('title')
posts
 @endsection
 <div class="text-center mt-4">
    <br>
    <div >
<button type="button" class="btn btn-success">Create Post</button>
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

      <td>{{$post['postBy']}}</td>
      <td>{{$post['createdAt']}}</td>
      <td>

        {{-- href="/posts/{{$post['id']}}" --}}

        {{-- shortcut name and parameter to routing  --}}
        <a href="{{route('posts.show',parameters: $post['id'])}}"   conte  type="button" class="btn btn-primary">View</button>
<a type="button" class="btn btn-danger">Delete</button>
<a type="button" class="btn btn-info">Edit</button>

      </td>
    </tr>

    @endforeach

  </tbody>
</table>
</div>

   </div>

@endsection
