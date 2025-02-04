
<header class="site-header js-site-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="#">{{ $infor->name }}</a></div>
            <div class="col-6 col-lg-8">
                <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- END menu-toggle -->
                <div class="site-navbar js-site-navbar">
                    <nav role="navigation">
                        <div class="container">
                            <div class="row full-height align-items-center">
                                <div class="col-md-6 ml-auto">
                                    <ul class="list-unstyled menu">
                                        <li class="active"><a href="/">Home</a></li>
                                        <li><a href="{{ url('rooms') }}">Rooms</a></li>
                                        <li><a href="{{ url('about') }}">About</a></li>
                                        <li><a href="{{ url('event') }}">Events</a></li>
                                        <li><a href="{{ route('register') }}">Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
