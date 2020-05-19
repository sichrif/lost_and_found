@extends('layouts.app')



@section('content')
<div class="container">
    <fieldset>
        <legend>Add New Post</legend>
        <form action="/store" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="booking_date">Title</label>
                        <input type="text" name="title"  id="title" class="form-control" placeholder="choose a title for your post" >
                      @error('title')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" name="description"  id="description" class="form-control" >
                      @error('description')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="posttype">Post type</label>
                      <select type="number" name="posttype"  id="posttype" class="form-control" >
                      <option>Lost propriety</option>
                        <option>Something found</option>
                      @error('posttype')<div class="text-danger">{{ $message }}</div> @enderror
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="text" name="photo"  id="photo" class="form-control" >
                      
                      @error('photo')<div class="text-danger">{{ $message }}</div> @enderror
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-outline-primary btn-block">Post Now !</button>
            </div>
        </form>
    </fieldset>
    </div>
@endsection