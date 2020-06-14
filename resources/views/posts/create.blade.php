@extends('layouts.app2')



@section('content')
<div class="container">
    <fieldset>
        <legend><h3>Add New Post</h3></legend>
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label for="title">Title</label>
                        <input type="text" name="title"  id="title" class="form-control" placeholder="choose a title for your post" >
                      @error('title')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group">
                      <label for="posttype">Post type</label>
                      <select class="form-control show-tick"  name="posttype"  id="posttype">
                      <option>Lost propriety</option>
                        <option>Something found</option>
                        @error('posttype')<div class="text-danger">{{ $message }}</div> @enderror
                      </select>  
                      
                    </div>
                </div>

               
                <div class="col-sm-4">
                    <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="file" name="photo"  id="photo" class="form-control" >
                      
                      @error('photo')<div class="text-danger">{{ $message }}</div> @enderror
                       
                    </div>
                </div>
            
                <div class="form-line col-sm-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..." name="description"  id="description" class="form-control"></textarea>
                      @error('description')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            


                
                    

                
            </div>
            <div class="row">
                <button href="/" type="submit" class="btn btn-outline-primary btn-block">Post Now !</button>
                <button type="reset" class="btn btn-outline-secondary btn-block">Cancel</button>
            </div>
        </form>
    </fieldset>
    </div>
@endsection