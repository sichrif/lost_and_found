@extends('layouts.master')
@section('title', 'All your posts')
@section('content')


@if (session('deletePost'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deletePost') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@foreach($posts as $post)
<div class="row">



    <div class="col-lg-8 col-md-5">
        <div class="card">
            <div class="blogitem mb-2S">
                <div class="blogitem-image">
                    <a href="#"><img src="{{asset('assets/images/image-gallery/5.jpg')}}" alt="blog image"></a>
                    <span class="blogitem-date">{{$post->created_at->format('d/m/Y')}}</span>
                </div>
                <div class="blogitem-content">
                <div class="container">
                    <div class="blogitem-header">
                        <div class="blogitem-meta">
                            <span><i class="zmdi zmdi-account"></i>By <a href="javascript:void(0);">{{ Auth::user()->name }}</a></span>
                            <span><i class="zmdi zmdi-comments"></i><a href="#">{{ $post->posttype }}</a></span>
                        </div>
                        <div class="blogitem-share">
                            <ul class="list-unstyled mb-0">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter-box"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h5>{{$post->title}}</h5>
                    <p>{{$post->description}}</p>
                    
                    <div class="btn-group">
                    <a href="/show_more/{{$post->id}}" class="btn btn-info">Show More</a>
                    <a href="/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                        </div>
                </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="container">
<div class="row">

    

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
    <div class="container">
    


    <div class="pull-left">
    
    <a href="/create" class="btn btn-outline-info btn-lg">
    <i class="fa fa-plus" ></i>
    Add post</a>
    </div>
  
    <div class="album py-5 bg-light">
      
      
  
        <div class="row">
           @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                    <img src="{{ $post['photo'] }}" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail">
                    <div class="card-body">
                        <h4 class="card-title"> {{$post->title}} </h4>
                        <p class="card-text">{{$post->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href= "/show_more/{{$post->id}}" class="btn btn-sm btn-outline-secondary" >View</a>
                        <a href= "/{{$post->id}}/edit" class="btn btn-sm btn-outline-secondary" >Edit</a>
                            
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

