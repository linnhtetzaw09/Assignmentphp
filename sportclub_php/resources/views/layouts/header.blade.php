<!-- start header section -->

<header id="home" class="@if(request()->routeIs('index')) header-index @endif">
            
    <!-- start Nav bar -->

        <nav class="navbar navbar-expand-lg fixed-top">

            <a href="index.html" class="navbar-brand text-light mx-3">
                <img src="./assets/img/fav/sporticon.png" width="70" alt="favicon">
                <span class="text-uppercase h2 fw-bold mx-2">Auston <span class="h4">Sport Club</span></span>
            </a>

            <button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
                <div class="bg-light lines1"></div>
                <div class="bg-light lines2"></div>
                <div class="bg-light lines3"></div>
            </button>

            <div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
                <ul class=" navbar-nav">
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link mx-2 menuitems">Home</a></li>
                    <li class="nav-item"><a href="#aboutus" class="nav-link mx-2 menuitems">About Us</a></li>
                    <li class="nav-item"><a href="#activities" class="nav-link mx-2 menuitems">Activities</a></li>
                    <li class="nav-item"><a href="{{ route('news') }}" class="nav-link mx-2 menuitems">News & Announcements</a></li>
                    <li class="nav-item"><a href="{{ route('events') }}" class="nav-link mx-2 menuitems">Events</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link mx-2 menuitems">Contact</a></li>
                </ul>
            </div>

        </nav>

    <!-- end Nav bar -->

    @yield('banner')

</header>

<!-- end header section -->