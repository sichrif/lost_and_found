@extends('layouts.app2')



@section('content')
<div class="container">
<div class="alert alert-info text-center" role="alert">
            <strong>Be sure of your input informations and describe what you lost well</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
            </button>
        </div>
    <fieldset>
        <legend> <h3>Edit your post </h3></legend>
        <form action="/update/{{$post->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label for="title">Title</label>
                        <input type="text" name="title"  id="title" class="form-control" value="{{$post->title}}">
                      @error('title')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group">
                      <label for="posttype">Post type</label>
                      <select type="number" name="posttype"  id="posttype" class="form-control" value="{{$post->posttype}}">
                      <option>Lost propriety</option>
                        <option>Something found</option>
                      @error('posttype')<div class="text-danger">{{ $message }}</div> @enderror
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="text" name="photo"  id="photo" class="form-control" value="{{$post->photo}}">
                      
                      @error('photo')<div class="text-danger">{{ $message }}</div> @enderror
                       
                    </div>
                </div>
                <div class="form-line col-sm-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input rows="4" class="form-control no-resize" type="text" name="description"  id="description" class="form-control" value="{{$post->description}}" >
                      @error('description')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <button  type="submit" class="btn btn-outline-primary btn-block">Save</button>
            </div>
        </form>
    </fieldset>
    </div>
@endsection