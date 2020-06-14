<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="../assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Lost & Found</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>User</small>
                    </div>
                </div>
            </li>            

            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}">
            
             <a href="#Profil" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>My Profile</span></a>
          
                <ul class="ml-menu">
                     <li class="{{ Request::segment(2) === 'contact-list' ? 'active' : null }}"><a href="{{route('user.index')}}">My Profil</a></li>
                      <li class="{{ Request::segment(2) === 'contact-list' ? 'active' : null }}"><a href="{{route('user.contact-list')}}">Contact list</a></li>
                </ul>
            </li>
            
            
           
        </ul>
    </div>
</aside>