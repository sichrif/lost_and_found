@extends('layouts.app')



@section('content')
<div class="container">
    <fieldset>
        <legend>Edit your post</legend>
        <form action="/update/{{$post->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="title">Title</label>
                        <input type="text" name="title"  id="title" class="form-control" value="{{$post->title}}">
                      @error('title')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" name="description"  id="description" class="form-control" value="{{$post->description}}" >
                      @error('description')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="posttype">Post type</label>
                      <select type="number" name="posttype"  id="posttype" class="form-control" value="{{$post->posttype}}">
                      <option>Lost propriety</option>
                        <option>Something found</option>
                      @error('posttype')<div class="text-danger">{{ $message }}</div> @enderror
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="text" name="photo"  id="photo" class="form-control" value="{{$post->photo}}">
                      
                      @error('photo')<div class="text-danger">{{ $message }}</div> @enderror
                       
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