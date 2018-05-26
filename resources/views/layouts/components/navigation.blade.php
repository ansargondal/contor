<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    @guest
        <a href="#" class="navbar-brand">{{config('app.name')}}</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Sign Up</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
        </ul>
    @endguest

    @auth
        <div class="profile-box">
            <a href="#" class="nav-link dropdown-toggle dropdown" data-toggle="dropdown">
                <span class="headshot"><img src="{{asset('images/headshot-3.jpg')}}" alt="Profile Pic"></span>
                Ansar Gondal
                <ul class="dropdown-menu">
                    <li class="dropdown-item">Profile Settings</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item">Change Password</li>
                    <li class="dropdown-item">Logout</li>
                </ul>
            </a>
        </div>
    @endauth
</nav>