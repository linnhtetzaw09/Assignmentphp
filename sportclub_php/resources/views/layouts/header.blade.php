<header id="home" class="@if(request()->routeIs('index')) header-index @endif">
    <nav class="navbar navbar-expand-lg fixed-top">
        <a href="{{ route('index') }}" class="navbar-brand text-light mx-3">
            <img src="{{ asset('assets/img/fav/sporticon.png') }}" width="70" alt="favicon">
            <span class="text-uppercase h2 fw-bold mx-2">Auston <span class="h4">Sport Club</span></span>
        </a>

        <button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="bg-light lines1"></div>
            <div class="bg-light lines2"></div>
            <div class="bg-light lines3"></div>
        </button>

        <div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item"><a href="{{ route('index') }}" class="nav-link mx-2 menuitems">Home</a></li>
                <li class="nav-item"><a href="{{ route('index') }}#aboutus" class="nav-link mx-2 menuitems">About Us</a></li>
                <li class="nav-item"><a href="{{ route('index') }}#activities" class="nav-link mx-2 menuitems">Activities</a></li>
                <li class="nav-item"><a href="{{ route('news') }}" class="nav-link mx-2 menuitems">News & Announcements</a></li>
                <li class="nav-item"><a href="{{ route('events.index') }}" class="nav-link mx-2 menuitems">Events</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link mx-2 menuitems">Contact</a></li>

                <!-- Show Dashboard for Admins Only -->
                @if(auth()->check() && auth()->user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link mx-2 menuitems" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                @endif
                
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(Auth::user()->profile_image)
                                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="User Image" class="rounded-circle" width="30" height="30">
                            @else
                                <span class="text-white">{{ Auth::user()->name }}</span>
                            @endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register.form') }}">Sign Up</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @yield('banner') <!-- Custom banner section -->

</header>
