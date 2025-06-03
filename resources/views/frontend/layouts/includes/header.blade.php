<!-- HEADER AREA START (header-5) -->
<header
    class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent gradient-color-2">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area top-area-color-white d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i
                                        class="icon-mail"></i> info@webmail.com</a></li>
                            <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-end">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__language-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                        <ul>
                                            <li><a href="#" class="dropdown-toggle"><span
                                                        class="active-currency">English</span></a>
                                                <ul>
                                                    <li><a href="#">Arabic</a></li>
                                                    <li><a href="#">Bengali</a></li>
                                                    <li><a href="#">Chinese</a></li>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Hindi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                            </li>

                                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->

    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend') }}/img/cropped-Starlit-logo.png"
                                    alt="Logo"></a>
                        </div>
                        <div class="get-support clearfix d-none">
                            <div class="get-support-icon">
                                <i class="icon-call"></i>
                            </div>
                            <div class="get-support-info">
                                <h6>Get Support</h6>
                                <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column menu-color-white">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu font_size">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>

                                    <li class=""><a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="menu-icon"><a href="{{ route('properties') }}">Property</a>
                                        <ul>
                                            <li><a href="{{ route('properties.luxury') }}">Luxury</a></li>
                                            <li><a href="{{ route('properties.classic') }}">Classic</a></li>
                                            <li><a href="{{ route('properties.comercial') }}">Welmess Communities</a></li>
                                            <li><a href="{{ route('properties.comercial') }}">Comercial</a></li>
                                            <li><a href="{{ route('properties.ongoing') }}">Ongoing</a></li>
                                            <li><a href="{{ route('properties.upcoming') }}">Upcoming</a></li>
                                            <li><a href="{{ route('properties.completed') }}">Completed</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon"><a href="{{ route('gallery') }}">gallery</a>
                                        <ul>
                                            <li><a href="{{ route('gallery.image') }}">Image gallery</a></li>
                                            <li><a href="{{ route('gallery.video') }}">Video gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{ route('news') }}">News</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    {{-- <li class="special-link">
                                        <a href="add-listing.html">Add Listing</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col--- ltn__header-options ltn__header-options-2 ">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path
                                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                    id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path
                                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                    id="bottom"
                                    transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->

<!-- Utilize Cart Menu Start -->

<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.html"><img src="{{ asset('assets/frontend') }}/img/cropped-Starlit-logo.png" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a class="active" href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('properties') }}">Property</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('properties.luxury') }}">Luxury</a></li>
                        <li><a href="{{ route('properties.classic') }}">Classic</a></li>
                        <li><a href="{{ route('properties.wellness') }}">Welmess Communities</a></li>
                        <li><a href="{{ route('properties.comercial') }}">Comercial</a></li>
                        <li><a href="{{ route('properties.ongoing') }}">Ongoing</a></li>
                        <li><a href="{{ route('properties.upcoming') }}">Upcoming</a></li>
                        <li><a href="{{ route('properties.completed') }}">Completed</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('gallery') }}">gallery</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('gallery.image') }}">Image gallery</a></li>
                        <li><a href="{{ route('gallery.video') }}">Video gallery</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->
