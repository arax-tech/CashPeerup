<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Libs CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/libs/bootstrap-icons/font/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/libs/tiny-slider/dist/tiny-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/libs/nouislider/dist/nouislider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/fonts/flat-font-icons/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/fonts/fontello-icons/fontello.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/libs/magnific-popup/dist/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/libs/jquery-ui/themes/base/all.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/libs/jquery-ui/demos/demos.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/libs/magnific-popup/dist/magnific-popup.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/theme.min.css') }}">
        <title>@yield('title')</title>
        @yield('css')
    </head>
    <body>
        @include('frontend.inc/header')

        @yield('content')
        

    
        <div class="footer bg-dark pt-8 ">
            <!-- footer -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
                        <div class="mb-4 mb-lg-0">
                            <!-- Footer Logo -->
                            <h1 class="text-white">CashPeerup</h1>
                        </div>
                        <!-- /.Footer Logo -->
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <form class="row g-0 align-items-center" method="post">
                            <div class="col-md-4 col-12 mb-3 mb-md-0">
                                <h3 class="text-white mb-0">Signup Our Newsletter</h3>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="input-group">
                                    <input type="email" class="form-control border-0
                                    shadow-none" id="newsletter" placeholder="Write email address" required aria-describedby="basic-addon2">
                                    <a href="#" class="btn btn-primary" id="basic-addon2">Go!</a>
                                </div>
                            </div>
                        </form>
                        <!-- /.col-lg-6 -->
                    </div>
                </div>
                <hr class="bg-gray-800 my-6">
                <div class="row mb-8">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="text-white-50 mb-3">
                            <!-- widget text -->
                            <p>Our goal at CashPeerup Loan Company is to provide access to personal loans and education loan, car loan, home loan at insight competitive interest rates lorem ipsums. We are the loan provider, you can use our loan product.</p>
                            <div class="row mt-6">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt text-white mt-1" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                    <div class="ms-3">3895 Sycamore Road Arlington, 97812</div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6
                                col-12 mt-3 mt-md-0">
                                <div class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone text-white mt-1" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                                <div class="ms-3 fs-3">(913) 543-8749</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.widget text -->
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="mb-3">
                    <!-- widget footer -->
                    <ul class="list-unstyled text-muted">
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Home</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Services</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>About Us</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>News</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Faq</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- /.widget footer -->
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="mb-3">
                    <!-- widget footer -->
                    <ul class="list-unstyled text-muted">
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Car Loan</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Personal Loan</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Education Loan</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Business Loan</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Home Loan</a>
                        </li>
                        <li class="d-flex">
                            <a href="#" class="text-inherit fs-5">
                                <i class="bi bi-chevron-right fs-6
                            me-2"></i>Debt Consolidation</a>
                        </li>
                    </ul>
                </div>
                <!-- /.widget footer -->
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="mb-3">
                    <!-- widget footer -->
                    <ul class="list-unstyled text-muted">
                        <li class="d-flex"><a href="#!" class="text-inherit">
                        <i class="fab fa-facebook-f me-2 fs-5"></i>Facebook</a></li>
                        <li class="d-flex"><a href="#!" class="text-inherit"><i class="fab fa-google
                            me-2 fs-5"></i>Google
                        </a></li>
                        <li class="d-flex"><a href="#!" class="text-inherit"><i class="fab fa-twitter
                        me-2 fs-5"></i>Twitter</a></li>
                        <li class="d-flex"><a href="#!" class="text-inherit"><i class="fab
                            fa-linkedin me-2 fs-5"></i>Linked
                        In</a></li>
                    </ul>
                </div>
                <!-- /.widget footer -->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <p class="fs-6 text-muted">© Copyright 2021 | CashPeerup Loan Company</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12
                text-md-end">
                <p class="fs-6 text-muted"><a href="#" class="text-inherit">Terms
                of use</a> |
                <a href="#" class="text-inherit">Privacy Policy</a></p>
            </div>
        </div>
    </div>
    </div> <!-- Libs JS -->
    <script src="{{ asset('frontend/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontend/libs/nouislider/dist/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/libsfrontend/imagesloadedfrontend/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/prismjs/prism.js') }}"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>
    <!-- Sweet Alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    @if(Session::has('flash_message_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{!! session('flash_message_error') !!}',
            });
        </script>
    @endif
    
    @if(Session::has('flash_message_success'))
        <script>
            Swal.fire(
                '{!! session('flash_message_success') !!}',
                '',
                'success'
            )
        </script>
    @endif
    <!-- Theme JS -->
    <script src="{{ asset('frontend/js/theme.min.js') }}"></script>
    @yield('js')

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6190c28c6885f60a50bbb62f/1fkenfu5h';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->