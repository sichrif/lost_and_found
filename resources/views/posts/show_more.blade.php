@extends('layouts.master')
@section('title', 'More details about your post')

@section('content')
<div class="container">

<br>
<br>


<div class="col-lg-12 col-md-12">
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
                            <span><i class="zmdi zmdi-account"></i>By <a href="javascript:void(0);">{{ (Auth::user()->name) }} {{ (Auth::user()->lastname) }}</a></span>
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
                    <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">
                    <i class="zmdi zmdi-delete"></i> Delete</a>

                      <a href= "/show" class="btn btn-outline-secondary" >
                          <i class="zmdi zmdi-mail-reply-all"></i> Go back</a>

                         
                  </div>
                </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>



      <!-- Modal -->
  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete your post ?
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-danger"
              onclick="event.preventDefault();
              document.querySelector('#delete-post-form').submit();">Confirm delete</button>
          </div>
          <form id="delete-post-form" action="/delete/{{$post->id}}" method="POST" style="display: none;">
              @csrf
              @method('DELETE')
          </form>
      </div>
    </div>
  </div>
</div>
@endsection