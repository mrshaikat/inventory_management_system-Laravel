<div class="main-navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="frontend/assets/img/logo1.png" alt="logo">
                    </a>
                </div>
                <div class="cart responsive">
                    <a href="cart.html" class="cart-btn"><i class='bx bx-cart'></i>
                        <span class="badge">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="frontend/assets/img/logo1.png" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active toggle">Home<i class='bx bxs-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Home Demo - 1</a>
                                </li>

                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">Home Demo - 2</a>
                                </li>

                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link active">Home Demo - 3</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link toggle">Pages<i class='bx bxs-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a href="booking.html" class="nav-link">Booking</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="error-404.html" class="nav-link">404 Error</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="register.html" class="nav-link">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forgot-password.html" class="nav-link">Forgot Password</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link toggle">Destinations<i class='bx bxs-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="destinations.html" class="nav-link">Destinations</a>
                                </li>
                                <li class="nav-item">
                                    <a href="destination-details.html" class="nav-link">Destinations Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link toggle">Tours<i class='bx bxs-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="tours.html" class="nav-link">Tours</a>
                                </li>
                                <li class="nav-item">
                                    <a href="special-offers.html" class="nav-link">Trip Offers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about.show') }}" class="nav-link">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog.show') }}" class="nav-link">Blog</a>
                        </li>


                        {{-- <li class="nav-item"><a href="#" class="nav-link toggle">Blog<i class='bx bxs-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-style-1.html" class="nav-link">Blog Style One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-style-2.html" class="nav-link">Blog Style Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-style-3.html" class="nav-link">Blog Style Three</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="nav-item">
                            <a href="{{ route('contact.show') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="cart">
                        <a href="{{ route('cart.show') }}" class="cart-btn"><i class='bx bx-cart'></i>
                            <span class="badge">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>