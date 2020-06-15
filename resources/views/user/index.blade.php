@extends('layouts.master')
@section('title', 'My Profile')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
@stop

@section('content')

<div class="row clearfix">

    <div class="col-xl-4 col-lg-12 col-md-12">
   
        <div class="card mcard_3">
            <div class="body">
            <a href="/{{$users->id}}/edit_user" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
            
                <a href="javascript:void(0);"><img src="{{asset('assets/images/profile_av.jpg')}}" class="rounded-circle" alt="profile-image"></a>
               
                <div class="row">
                    <div class="col-12 mb-4">
                        <ul class="social-links list-unstyled">
                            <li><a href="#" title="facebook" ><i class="zmdi zmdi-facebook-box"></i></a></li>
                            <li><a href="#" title="twitter"><i class="zmdi zmdi-twitter-box"></i></a></li>
                            <li><a href="#" title="instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                        </ul>
                        <p class="text-muted">{{ $users->name ,$users->lastname }}</p>
                        <br>
                      
                        <p class="text-muted">{{ $users->address }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
            <small class="text-muted">User Type: </small>
                            <p>{{ $users->usertype}}</p>
                            
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p>{{ $users->phone }}</p>
                            
                <hr>
                <small class="text-muted">Email address: </small>
                <p>{{ $users->email}}</p>
                <hr>
               
                   
            </div>
        </div>                    
    </div>
    <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                    
                </div>
</div>

@stop
@section('page-script')
<script src="{{asset('assets/bundles/fullcalendarscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/calendar/calendar.js')}}"></script>

@stop