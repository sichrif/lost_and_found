@extends('layouts.master')


@section('title')

        edit users

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
        <form action="/register-create/" method="post">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="phone">phone:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="phone" placeholder="Enter name" name="phone">
        </div>
      </div>
        
      <div class="form-group row">
        <label for="RIB" class="col-md-4 col-form-label text-md-right">{{ __('RIB') }}</label>

        <div class="col-md-6">
            <input id="RIB" type="text" class="form-control @error('RIB') is-invalid @enderror" name="RIB" value="{{ old('RIB') }}" required autocomplete="RIB" autofocus>

            @error('RIB')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10">          
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div></div>
  </form>
</div>
</div>
</div>
  @section('scripts')


@endsection
