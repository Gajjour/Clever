<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area d-flex justify-content-between align-items-center">
        <!-- Contact Info -->
        <div class="contact-info">
            <a href="#"><span>Phone:</span> +44 300 303 0266</a>
            <a href="#"><span>Email:</span> info@clever.com</a>
        </div>
        <!-- Follow Us -->
        <div class="follow-us">
            <span>Follow us</span>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="clever-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cleverNav">

                <!-- Logo -->
                <a class="nav-brand" href="/"><img src="{{ url('/') }}/img/core-img/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/blog">Courses</a></li>
                            <!-- <li><a href="courses">Courses</a></li> -->
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/regular-page">Profile</a></li>

                        </ul>

                        <!-- Register / Login -->
                        <div class="register-login-area">
                            @guest
                                <a href="/register" class="btn">Register</a>
                                <a href="/login" class="btn active">Login</a>
                            @else
                                <a class="btn" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest
                        </div>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
