@extends('layouts.master')

@section('parentPageTitle', 'profile')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}" />
@stop
@section('content')


<div class="body_scroll">

        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Edit your Informations</h2>
                  
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href=" {{ route('user.show', $users->id) }}" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-check"></i></a>
                </div>
            </div>
        </div> 
      
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
               
                        
              
                    
                    <div class="card">
                        <div class="header">
                            <h2><strong>Account</strong> Settings</h2>
                        </div>
                        <form action="/update_user/ {{ $users->id }}" method="post">
                         @csrf
                           @method('PATCH')
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') ?? $users->name}}" id="name" >
                                        @error('name') <div class="text-danger" >{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lastname"value="{{ old('lastname') ?? $users->lastname}}" id="lastname" >
                                        @error('lastname') <div class="text-danger" >{{ $message }}</div> @enderror
                                    </div>
                                </div>                                    
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Addredss" name="address"value="{{ old('address') ?? $users->address}}" id="address" >
                                        @error('address') <div class="text-danger" >{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-smartphone"></i></span>
                                        </div>
                                        <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00" name="phone" value="{{ old('phone') ?? $users->phone}}" id="phone" >
                                        @error('phone') <div class="text-danger" >{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                               <div class="form-group">
                                   
                                    <select class="form-control show-tick ms select2" data-placeholder="Select" placeholder="User_Type"name="usertype" value="{{ old('usertype') ?? $users->usertype}}" id="usertype"  >
                                        @error('usertype') <div class="text-danger" >{{ $message }}</div> @enderror
                                        <option>Finder</option>
                                        <option>Owner</option>
                                        
                                    </select>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-6">
                                  
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                                        </div>
                                        <input type="text" class="form-control email" placeholder="Ex: example@example.com" name="email" value="{{ old('email') ?? $users->email}}" id="email" >
                                        @error('email') <div class="text-danger" >{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                
                             
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <input id="procheck1" type="checkbox" checked>
                                        <label for="procheck1">Profile Visibility For Everyone</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="procheck2" type="checkbox">
                                        <label for="procheck2">New task notifications</label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="procheck3" type="checkbox">
                                        <label for="procheck3">New friend request notifications</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" >Confirm update ! </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </from>
@stop
@section('page-script')
<script src="{{asset('assets/bundles/footable.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/footable.js')}}"></script>
@stop