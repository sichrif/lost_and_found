@extends('layouts.master')


@section('title')

        edit post

@endsection

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
     <!--          
          <form action="/register-update/{{  $post->id  }}" method="post"> 
          -->
          <form action="post-update/{{  $post->id  }}" method="post">
            {{ csrf_field()}}
            {{ method_field('PUT')}}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">title</label>
              <input type="title" class="form-control" value="{{ $post->title }}" id="inputtitle" placeholder="title" name="title">
              </div>
              <div class="form-group col-md-6">
                <label for="inputdescription">description</label>
                <input type="description" class="form-control" value="{{ $post->description }}" id="inputdescription" placeholder="description" name="description">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputposttype">posttype	</label>
              <input type="posttype	" class="form-control" value="{{ $post->posttype }}" id="inputposttype" placeholder="posttype" name="posttype">
              </div>
            
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="">
                    Check me out
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Modify</button>
          </form>
 
</div>
</div>
</div>


@endsection
