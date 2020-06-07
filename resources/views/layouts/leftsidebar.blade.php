
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="../assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">L&F</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Owner</small>
                    </div>
                </div>
            </li>            
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="/show"><i class="zmdi zmdi-home"></i><span>My Posts</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="#"><i class="zmdi zmdi-account"></i><span>My Profile</span></a></li>
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="/create" ><i class="zmdi zmdi-plus"></i> <span>Add New Post</span></a>
                
            </li>
            
            
        </ul>
    </div>
</aside>
