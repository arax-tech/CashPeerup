<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/typography.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
        @yield('css')
    </head>
    <body>
        
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- Sidebar  -->
            @include('admin.layouts.inc.sidebar')

            <!-- TOP Nav Bar -->
            @include('admin.layouts.inc.header')
            
            <!-- TOP Nav Bar END -->
            <!-- Page Content  -->
            @yield('content')
        </div>
        <!-- Wrapper END -->
        <!-- Footer -->
        <footer class="iq-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-6 text-right">
                        © Copyright {{ date('Y') }} | CashPeerup Loan Company

                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END -->
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
        <!-- lottie JavaScript -->
        <script src="{{ asset('backend/js/lottie.js') }}"></script>
        <!-- am core JavaScript -->
        <script src="{{ asset('backend/js/core.js') }}"></script>
        <!-- am charts JavaScript -->
        <script src="{{ asset('backend/js/charts.js') }}"></script>
        <!-- am animated JavaScript -->
        <script src="{{ asset('backend/js/animated.js') }}"></script>
        <!-- am kelly JavaScript -->
        <script src="{{ asset('backend/js/kelly.js') }}"></script>
        <!-- am maps JavaScript -->
        <script src="{{ asset('backend/js/maps.js') }}"></script>
        <!-- am worldLow JavaScript -->
        <script src="{{ asset('backend/js/worldLow.js') }}"></script>
        <!-- Raphael-min JavaScript -->
        <script src="{{ asset('backend/js/raphael-min.js') }}"></script>
        <!-- Morris JavaScript -->
        <script src="{{ asset('backend/js/morris.js') }}"></script>
        <!-- Morris min JavaScript -->
        <script src="{{ asset('backend/js/morris.min.js') }}"></script>
        <!-- Flatpicker Js -->
        <script src="{{ asset('backend/js/flatpickr.js') }}"></script>
        <!-- Style Customizer -->
        <script src="{{ asset('backend/js/style-customizer.js') }}"></script>
        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('backend/js/chart-custom.js') }}"></script>
        <!-- Custom JavaScript -->
        <script src="{{ asset('backend/js/custom.js') }}"></script>
        @yield('js')
        {{-- <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $(document).ready(function(){
                $(function() {
                    
                    $(".Delete").click(function(){
                        var id = $(this).attr('rel');
                        var url = $(this).attr('rel1');
                        Swal.fire({
                          title: 'Are you sure?',
                          text: "You won't be able to revert this!",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Yes, delete it!'
                        });
                        
                        $('.swal2-confirm').click(function(){
                            window.location.href = '{{url('')}}'+ '/' + url +'/'+ id;
                        });
                    });
                });
            });
            $(document).ready(function() {
                // $('select').select2();
            });

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