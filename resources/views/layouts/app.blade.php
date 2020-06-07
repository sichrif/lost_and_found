<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->

    <title>{{ config('app.name', 'Lost&Found') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>    
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        @include('layouts.leftsidebar')
        <section class="content">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-sm-12">
                        <h2>@yield('title')</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i> Lost&Found</a></li>
                            @if (trim($__env->yieldContent('parentPageTitle')))
                                <li class="breadcrumb-item">@yield('parentPageTitle')</li>
                            @endif
                            @if (trim($__env->yieldContent('title')))
                                <li class="breadcrumb-item active">@yield('title')</li>
                            @endif
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>            
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">                
                @yield('content')
            </div>
        </section>
    </div>
    
</body>
</html>
