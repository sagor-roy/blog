<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">The Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#!">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Pricing</a></li>
                    @guest

                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>

                    @endguest
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.logout') }}">Logout</a></li>
                    @endauth
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
