<!doctype html>
<html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>User - Login</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/typography.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
    </head>
    <body>
        <!-- Sign in Start -->
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="container p-0" id="sign-in-page-box">
                    <div class="bg-white form-container">
                        <div class="sign-in-page-data">
                            <div class="sign-in-from">
                                <h1 class="mb-3 text-center">Login</h1>
                                <p class="text-center text-dark">Welcome Back Please Enter your email and password to access your panel.</p>
                                <form class="mt-4" method="post" action="{{ url('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label >Email address</label>
                                        <input type="email" name="email" id="email" onfocus="onfocus" class="form-control mb-0">
                                    </div>
                                    <div class="form-group">
                                        <label >Password</label>
                                        {{-- <a href="#" class="float-right">Forgot password?</a> --}}
                                        <input type="password" name="password" class="form-control mb-0">
                                    </div>
                                   
                                    <div class="sign-info">
                                        <button type="submit" class="btn btn-primary mb-2 btn-block btn-lg">Login</button>
                                    </div>
                                </form>

                                <center>
                                    i Don't Have a Account ? <a href="{{ url('register') }}">SignUp</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        

        <!-- color-customizer END -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
        <!-- Appear JavaScript -->
        <script src="{{ asset('backend/js/jquery.appear.js') }}"></script>
        <!-- Countdown JavaScript -->
        <script src="{{ asset('backend/js/countdown.min.js') }}"></script>
        <!-- Counterup JavaScript -->
        <script src="{{ asset('backend/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.counterup.min.js') }}"></script>
        <!-- Wow JavaScript -->
        <script src="{{ asset('backend/js/wow.min.js') }}"></script>
        <!-- Apexcharts JavaScript -->
        <script src="{{ asset('backend/js/apexcharts.js') }}"></script>
        <!-- lottie JavaScript -->
        <script src="{{ asset('backend/js/lottie.js') }}"></script>
        <!-- Slick JavaScript -->
        <script src="{{ asset('backend/js/slick.min.js') }}"></script>
        <!-- Select2 JavaScript -->
        <script src="{{ asset('backend/js/select2.min.js') }}"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="{{ asset('backend/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="{{ asset('backend/js/smooth-scrollbar.js') }}"></script>
        <!-- Style Customizer -->
        <script src="{{ asset('backend/js/style-customizer.js') }}"></script>
        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('backend/js/chart-custom.js') }}"></script>
        <!-- Custom JavaScript -->
        <script src="{{ asset('backend/js/custom.js') }}"></script>
        <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            window.onload = function() {
              document.getElementById("email").focus();
            };
        </script>

        @if(Session::has('flash_message_error'))
            <script>
                $(document).ready(function () {
                    toastr.error('{!! session('flash_message_error') !!}', 'Danger');
                });
            </script>
        @endif

        @if(Session::has('flash_message_success'))
            <script>
                $(document).ready(function () {
                    toastr.success('{!! session('flash_message_success') !!}', 'Success');
                });
            </script>
        @endif
    </body>
</html>