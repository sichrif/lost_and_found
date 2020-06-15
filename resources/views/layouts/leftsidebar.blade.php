
<!-- Left Sidebar -->

<aside id="leftsidebar" class="sidebar" >
    
    <div class="menu" >
        <ul class="list">
            <li>
            
                <div class="user-info">
                    <div class="image"><a href="'/'"></a></div>
                    <div class="detail">
                        <div class="row">
                            <div class="col-sm">
                                <h4> {{ Auth::user()->name }} </h4>
                                <small>{{ Auth::user()->lastname }}</small>
                            </div>
                            <div class="col-sm">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                               <i class="zmdi zmdi-open-in-new"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </div>
                        </div>
                        
                            
                        

                    </div>
                    
                </div>
               
            </li>            
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="/show"><i class="zmdi zmdi-home"></i><span>My Posts</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="/user"><i class="zmdi zmdi-account"></i><span>My Profile</span></a></li>
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="/create" ><i class="zmdi zmdi-plus"></i> <span>Add New Post</span></a>
                
            </li>
            
            
        </ul>
    </div>
</aside>
