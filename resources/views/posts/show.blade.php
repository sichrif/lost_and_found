@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

    <div class="col-md-12">

    <div class="pull-right">
    <marquee behavior="" direction="">hello beautiful people ! <3 </marquee>
    </div>

    <div class="pull-right">
    <a href="/create" class="btn btn-bg btn-success">Add post</a>
    </div>
    
    
    </div>

</div>

</div>
<main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1>Lost&Found</h1>
            <p class="lead text-muted">Missing Stuff: Online Lost and Found Property Management ...</p>
            <p>
            <p class="lead text-muted">What have you lost?</p>
            
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row">
           @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                    <img src="" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail">
                    <div class="card-body">
                        <h4 class="card-title"> {{$post->title}} </h4>
                        <p class="card-text">{{$post->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href= '{ route("posts.show") }}' class="btn btn-sm btn-outline-secondary" >View</a>
                        <a href= '{ route("posts.edit") }}' class="btn btn-sm btn-outline-secondary" >Edit</a>
                            
                        </div>
                        <small class="text-muted"> {{$post->post_owner_name}} </small>
                        </div>
                    </div>
                    </div>
                </div>
           @endforeach
        </div>
      </div>
    </div>
  
  </main>

@endsection

