@extends('frontend.app')
@section('title', 'Home')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<style type="text/css">
    .ratss{color: #ffc107 !important;}
    #rateYo{color: yellow !important}
</style>
@endsection
@section('content')
<div class="position-relative">
    <ul class="controls " id="sliderFirstControls">
        <li class="prev">
            <i class="fas fa-angle-left"></i>
        </li>
        <li class="next">
            <i class="fas fa-angle-right"></i>
        </li>
    </ul>
    <div class="sliderFirst">
        <div class="item">
            <div class="py-20" style="background: linear-gradient(rgba(20, 30, 40, 0.5), rgba(20, 30, 40, 0.5)),
                rgba(20, 30, 40, 0.5) url({{ asset('frontend/images/slider/slider-1.jpg') }}) no-repeat center;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div>
                                <!-- slider-captions -->
                                <h1 class="display-3 text-white fw-bold mb-3">Personal Loan to Suit Your Needs. </h1>
                                <p class="text-white d-none d-xl-block d-lg-block d-sm-block">The low rate you need for the need you want! Call
                                    <br>
                                <strong>(555) 123-4567</strong></p>
                                <a href="{{ url('loan') }}" class="btn btn-primary">View</a>
                            </div>
                            <!-- /.slider-captions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="py-20" style="background:linear-gradient(rgba(20, 30, 40, 0.7), rgba(20, 30, 40, 0.7)),
                rgba(20, 30, 40, 0.5) url({{ asset('frontend/images/slider/slider-2.jpg') }}) no-repeat center;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div>
                                <!-- slider-captions -->
                                <h1 class="display-3 text-white fw-bold mb-3 "> Lowest Car Loan Rate <strong class="text-warning">9.60%</strong> </h1>
                                <p class="text-white d-none d-xl-block d-lg-block d-sm-block"> We provide an excellent service Loan company. Lorem ipsum simple dummy content goes here.
                                </p>
                                <a href="{{ url('loan') }}" class="btn btn-primary">View</a>
                            </div>
                            <!-- /.slider-captions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="py-20" style="background: linear-gradient(rgba(20, 30, 40, 0.5), rgba(20, 30, 40, 0.5)),
                rgba(20, 30, 40, 0.5) url({{ asset('frontend/images/slider/slider-3.jpg') }}) no-repeat center;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div>
                                <!-- slider-captions -->
                                <h1 class="display-3 text-white fw-bold mb-3">Loan with Great Rates.<strong class="text-warning">11.00%</strong> </h1>
                                <p class="text-white d-none d-xl-block d-lg-block d-sm-block">We provide an excellent service for all types of loans in
                                <br> ahmedabad and offer service, advice and direction.</p>
                                <a href="{{ url('loan') }}" class="btn btn-primary">View</a>
                            </div>
                            <!-- /.slider-captions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4 bg-white smooth-shadow-sm">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6"> <img src="{{ asset('frontend/images/brand/company-logo/logo-1.jpg') }}" class="img-fluid"> </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6"> <img src="{{ asset('frontend/images/brand/company-logo/logo-2.jpg') }}" class="img-fluid"> </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6"> <img src="{{ asset('frontend/images/brand/company-logo/logo-3.jpg') }}" class="img-fluid"> </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6"> <img src="{{ asset('frontend/images/brand/company-logo/logo-4.jpg') }}" class="img-fluid"> </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6"> <img src="{{ asset('frontend/images/brand/company-logo/logo-5.jpg') }}" class="img-fluid"> </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6"> <img src="{{ asset('frontend/images/brand/company-logo/logo-1.jpg') }}" class="img-fluid"> </div>
    </div>
  </div>
</div>

<div class="py-lg-16 py-10 ">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-8 col-md-12 col-12">
                <div class="mb-8 text-center">
                    <!-- section title start-->
                    <h1 class="mb-3">Find Loan Products We Offers</h1>
                    <p class="lead px-md-8">We will match you with a loan program that meet your financial need. In short term liquidity, by striving to make funds available to them <strong>within 24
                    hours of application.</strong></p>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="position-relative">
            <ul class="controls controls-bottom" id="sliderSecondControls">
                <li class="prev">
                    <i class="fas fa-angle-left"></i>
                </li>
                <li class="next">
                    <i class="fas fa-angle-right"></i>
                </li>
            </ul>
            <div class="sliderSecond">
                @foreach ($loans as $loan)
                    <div class="item">
                        <div class="card smooth-shadow-sm border-0 m-2">
                            <div class="card-body p-5">
                                <div class="mb-5"> <img src="{{ asset('backend/admin/loan/'.$loan->loan_image) }}" class="icon-xxl"> </div>
                                <h3><a href="{{ url('loan/'.$loan->id) }}" class="text-inherit">{{ $loan->loan_title }}</a></h3>
                                <p>
                                    {{ mb_strimwidth($loan->loan_description, 0, 100, "...") }}
                                </p>
                                <a href="{{ url('loan/'.$loan->id) }}" class="btn-link border-bottom border-primary border-2 fw-bold fs-5">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

              
             
            </div>
        </div>
    </div>
</div>
<div class="py-lg-14 py-10" style="background: linear-gradient(rgba(20, 30, 40, 0.9), rgba(20, 30, 40, 0.9)),
    rgba(16, 75, 149, 0.9) url({{ asset('frontend/images/background/cta-img.jpg') }}) no-repeat center;">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12 ">
                <div class="mb-10 text-center text-white">
                    <!-- section title start-->
                    <h1 class="text-white">Why people choose us</h1>
                    <p class="lead text-white-50">We understand how to effectively guide you through the home loan or refinance process and avoid potential problems along the way. </p>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="mb-3 mb-lg-0 text-white text-center">
                    <div class="mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people text-white" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                    </svg></div>
                    <h3 class="text-white mb-2">Dedicated Specialists</h3>
                    <p class=" text-white-50">Duis eget diam quis elit erdiet alidvolutp terdum tfanissim non intwesollis eu mauris.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="mb-3 mb-lg-0 text-white text-center">
                    <div class="mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calculator text-white" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                        <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
                    </svg></div>
                    <h3 class="text-white mb-2">No Front Appraisal Fees!</h3>
                    <p class=" text-white-50">Integer faisis fringilla dolor ut luctus nisi volutpatIn terdum tferra dsim fermentum orci.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="mb-3 mb-lg-0 text-white text-center">
                    <div class="mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-right-text text-white" viewBox="0 0 16 16">
                        <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    </svg></div>
                    <h3 class="text-white mb-2">Success Stories Rating</h3>
                    <p class="text-white-50">Integer facilisis fringilla dolor volutpatIn terdum tfanissim velitliquam at fermentum orci.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-lg-16 py-10 border-bottom border-top">
    <div class="container">
        <div class="row">
            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12">
                <div class="mb-10 text-center">
                    <!-- section title start-->
                    <h1>Our Client Testimonial</h1>
                    <p class="lead">See what our customers have to say about CashPeerup products, people and services.</p>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-4 mb-lg-0 text-center px-lg-8">
                    <div class="mb-4"> <img src="{{ asset('frontend/images/avatar/avatar-1.jpg') }}" alt="CashPeerup - Loan Company Website Template" class="rounded-circle avatar avatar-xl"> </div>
                    <div class="mb-4">
                        <p class="lead fst-italic"> “I loved the customer service you guys provided me. That was very nice and patient with questions I had. I would really like definitely come back here”</p>
                    </div>
                    <div class="lh-1">
                        <h4 class="mb-1 fw-bold">Donny J. Griffin</h4>
                        <p class="mb-0 fs-6 text-primary fw-semi-bold">Personal Loan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-4 mb-lg-0 text-center px-lg-8">
                    <div class="mb-4"> <img src="{{ asset('frontend/images/avatar/avatar-2.jpg') }}" alt="CashPeerup - Loan Company Website Template" class="rounded-circle avatar avatar-xl"> </div>
                    <div class="mb-4">
                        <p class="lead fst-italic">"Donec arcu lacus, accumsan vel metus laoreet, pulvinar imperdiet nisi lorem sipusmn ras vel sapien imperdiet nisi sagittis ornare sed congue sem."</p>
                    </div>
                    <div class="lh-1">
                        <h4 class="mb-1 fw-bold">Mary O. Randle</h4>
                    <p class="mb-0 fs-6 text-primary fw-semi-bold">Education Loan</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="py-lg-16 py-10">
    <div class="container" style="min-height: 200px !important">
        <div class="row">
            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12">
                <div class="mb-5 text-center ">
                    <!-- section title start-->
                    <h1 class="mb-2">Approved Loans</h1>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row"  id="withdrawDataOld">
            
        
            
            
        </div>
    </div>
</div>

<div class="py-lg-10 py-10">
    <div class="container" style="min-height: 300px !important">
        <div class="row">
            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12">
                <div class="mb-5 text-center ">
                    <!-- section title start-->
                    <h1 class="mb-2"> Commission/Paid Loans</h1>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row" id="returnDataOld">
            
        
            
            
        </div>
    </div>
</div>
<section class="ttm-row broken-section ttm-bgcolor-grey clearfix" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span ttm-bgcolor-white spacing-3 z-index-1 mb-5">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content">
                        @php
                        error_reporting(0);
                            

                            $reviews = DB::table('reviews')->get();

                            $ratings = DB::table('reviews')->avg('ratings');

                            $rating5starts = DB::table('reviews')->where(['ratings' => 5])->count();
                            $rating4starts = DB::table('reviews')->where(['ratings' => 4])->count();
                            $rating3starts = DB::table('reviews')->where(['ratings' => 3])->count();
                            $rating2starts = DB::table('reviews')->where(['ratings' => 2])->count();
                            $rating1starts = DB::table('reviews')->where(['ratings' => 1])->count();

                            // dd($reviews);
                        @endphp
                        
                        <div class="row mb-8">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h3 class="font-size-18 mb-3">Based on {{ count($reviews) }} reviews</h3>
                                    <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">{{ mb_strimwidth($ratings, 0, 3) }}</h2>
                                    <div class="text-lh-1">overall</div>
                                </div>

                                <!-- Ratings -->
                                <ul class="list-unstyled">
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16">
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{ $rating5starts }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16">
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{ $rating4starts }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16">
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{ $rating3starts }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16">
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-muted">{{ $rating2starts }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16">
                                                    <small class="fa fa-star"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                    <small class="fa fa-star" style="color: gray !important"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{ $rating1starts }}</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Ratings -->
                            </div>
                            <div class="col-md-6">
                                <h3 class="font-size-18 mb-5">Add Your Review</h3>
                                <!-- Form -->
                                <form class="js-validate" method="post" action="{{ url('/review') }}">
                                    @csrf
                                    
                                    <div class="js-form-message form-group mb-3 row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="text" class="form-control" name="name" id="name" aria-label="Name" required data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    <div class="js-form-message form-group mb-3 row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="email" class="form-control" name="email" id="email" aria-label="info@xyz.com" required data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    


                                    <div class="js-form-message form-group mb-3 row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="reviews" class="form-label">Your Review <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea class="form-control" rows="3" id="reviews"
                                                data-msg="Please enter your message." data-error-class="u-has-error"
                                                data-success-class="u-has-success" required name="reviews"></textarea>
                                        </div>
                                    </div>

                                    <div class="js-form-message form-group mb-5 row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="ratings" class="form-label">Rating <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <div id="rateYo"></div>
                                            
                                            <input type="hidden" name="ratings" class="counter" value="3">
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary">Add Review</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>



                        <div class="mb-2 position-relative">
                            <dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                                <h3 class="section-title section-title__sm mb-0 pb-3 font-size-18">Latest Reviews</h3>
                            </dv>
                            <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 position-static"
                                data-slides-show="1"
                                data-slides-scroll="1"
                                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                data-arrow-left-classes="fa fa-angle-left right-1"
                                data-arrow-right-classes="fa fa-angle-right right-0">

                                @foreach ($reviews->chunk(3) as $chunk_reviews)
                                    <div class="js-slide">
                                        <ul class="list-unstyled products-group mb-0 overflow-visible">
                                            @foreach ($chunk_reviews as $review)
                                                
                                                <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                    <div class="product-item__outer h-100">
                                                        <div class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                            <div class="col-auto product-media-left">
                                                                <a href="javascript::" class="max-width-70 d-block">
                                                                    
                                                                    <img class="img-thumbnail rounded-circle" style="width: 60px; height: 60px;" src="{{ asset('placeholder.png') }}" class="avatar">
                                                                    
                                                                </a>
                                                            </div>
                                                            <div class="col product-item__body pl-2 pl-lg-3">
                                                                <div class="mb-4">
                                                                    <h5 class="product-item__title">
                                                                        <a href="javascript::" class="text-dark">
                                                                            <div class="font-size-15 font-weight-bold">{{ $review->name }} <span class="float-right" style="float: right !important;">{{ date('d M Y', strtotime($review->created_at)) }}</span></div>

                                                                        </a>
                                                                        <p style="margin: 3px 0px 3px 0px !important;">{{ $review->comment }}</p>
                                                                        
                                                                        @php
                                                                            error_reporting(0);
                                                                            $rate = explode('.', $review->ratings);
                                                                            $rating = $rate[0];
                                                                            $rating5 = $rate[1];
                                                                        @endphp

                                                                        @if($rating == 1)

                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>@elseif($rating == 2)
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>@elseif($rating == 3)
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>@elseif($rating == 4)
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star-o text-warning"></i></span>@elseif($rating == 5)
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        <span><i class="ratss fa fa-star"></i></span>
                                                                        @endif

                                                                        
                                                                    </h5>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                          
                                            
                                        </ul>
                                    </div>
                                @endforeach

                                
                               
                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script type="text/javascript">
    /* javascript */
    $(function () {
     
      $("#rateYo").rateYo({
        rating: 3,
        fullStar: true,
        onChange: function (rating, rateYoInstance) {
        $(".counter").val(rating);
        }
      });
    });
</script>

<script type="text/javascript">
    withdrawData();
    var intervalId = window.setInterval(function(){
    withdrawData();
    }, 3000)
    function withdrawData()
    {
        $("#withdrawDataOld").empty();
        var uri = "{{ url('withdrawData') }}";
        $.ajax({
            url: uri,
            type: "get",
            success:function(response)
            {
                $.each(response, function(key, value) {
                    console.warn(value['name']);
                    var data = '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-2">'+
                        '<div class="card mb-3 mb-lg-0 smooth-shadow-sm border-0">'+
                            '<div class="card-body py-3">'+
                                '<h4 class="mb-0">'+
                                    '<a href="" class="text-inherit"> '+
                                        '<i class="fa fa-upload" style="font-size: 16px;"></i>&nbsp;'+
                                        '<span class="ml-2">'+ value['name'] +'</span>'+
                                        '<span class="pl-5 float-right" style="float: right !important;">$'+ value['amount'] +'</span>'+
                                    '</a>'+
                                '</h4>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
                    
                $("#withdrawDataOld").append(data);
                });
            }
        });
    }



    returnData();
    var intervalId = window.setInterval(function(){
    returnData();
    }, 3000)
    function returnData()
    {
        $("#returnDataOld").empty();
        var uri = "{{ url('returnData') }}";
        $.ajax({
            url: uri,
            type: "get",
            success:function(response)
            {
                $.each(response, function(key, value) {
                    console.warn(value['name']);
                    var data = '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-2">'+
                        '<div class="card mb-3 mb-lg-0 smooth-shadow-sm border-0">'+
                            '<div class="card-body py-3">'+
                                '<h4 class="mb-0">'+
                                    '<a href="" class="text-inherit"> '+
                                        '<i class="fa fa-upload" style="font-size: 16px;"></i>&nbsp;'+
                                        '<span class="ml-2">'+ value['name'] +'</span>'+
                                        '<span class="pl-5 float-right" style="float: right !important;">$'+ value['amount'] +'</span>'+
                                    '</a>'+
                                '</h4>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
                    
                $("#returnDataOld").append(data);
                });
            }
        });
    }
</script>
@endsection
