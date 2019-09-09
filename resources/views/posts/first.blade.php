@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
          <div class="blog-post">
      
    <h1>{{ $post->title }}</h1>
         {{ $post->body }}
      
</div>
</div>
@endsection
