
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="index.html" class="header-logo">
                        <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                        <div class="pt-2 pl-2 logo-title">
                            <span class="text-danger text-uppercase">User<span class="text-primary ml-1"></span></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navbar-breadcrumb">
                <h4 class="mb-0 text-dark">Dashboard</h4>
                <p class="mb-0"><span class="text-danger">Hi there,</span> {{ auth::user()->name }}</p>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            </div>
            <ul class="navbar-list">
                <li class="line-height">
                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                        @if (empty(auth::user()->image))
                            <img src="{{ asset('backend/images/user/user.png') }}" class="img-fluid rounded-circle">
                        @else
                            <img src="{{ asset('backend/user/profile/'.auth::user()->image) }}" class="img-fluid rounded-circle">
                        @endif
                        
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">{{ auth::user()->name }}</h5>
                                    <span class="text-white font-size-12">Online</span>
                                </div>
                                <a href="{{ url('user/profile') }}" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-file-user-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">My Profile</h6>
                                            <p class="mb-0 font-size-12">View personal profile details.</p>
                                        </div>
                                    </div>
                                </a>
                               
                                <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="{{ url('user/logout') }}" role="button">Logout<i class="ri-login-box-line ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>