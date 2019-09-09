@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
          <div class="blog-post">

<h1>Create your post</h1>
<hr>
<form method="POST" action="/posts">
	@csrf
  <div class="form-group">
    <label for="exampleInputTitle">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter title">
    <small id="titleHelp" class="form-text text-muted">You'll never hire your title from anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputBody">Body</label>
    <textarea class="form-control" id="body" name="body" placeholder="Enter your description"></textarea>
  </div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
@include ('layouts.errors')
</form>

</div>
</div>
@endsection