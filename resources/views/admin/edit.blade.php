@extends('layouts.master')


@section('title')

        edit users

@endsection

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
     <!--          
          <form action="/register-update/{{  $users->id  }}" method="post"> 
          -->
          <form action="/register-update/{{  $users->id  }}" method="post">
            {{ csrf_field()}}
            {{ method_field('PUT')}}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" value="{{ $users->email }}" id="inputEmail4" placeholder="Email" name="email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" value="{{ $users->password }}" id="inputPassword4" placeholder="Password" name="password">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
              <input type="name" class="form-control" value="{{ $users->name }}" id="inputName" placeholder="name" name="name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Last Name</label>
              <input type="lastname" class="form-control" value="{{ $users->lastname }}" id="inputlastname" placeholder="lastname" name="lastname">
              </div>
            
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Phone</label>
              <input type="phone" class="form-control" value="{{ $users->phone }}" id="inputPhone" placeholder="phone" name="phone">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Last Name</label>
              <input type="lastname" class="form-control" value="{{ $users->lastname }}" id="inputlastname" placeholder="lastname" name="lastname">
              </div>
            
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
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
 
</div>
</div>
</div>


@endsection
