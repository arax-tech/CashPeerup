@extends('frontend.app')
@section('title', 'Loans')
@section('content')



<div class="pt-18 pb-10" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url({{ asset('frontend/images/background/page-header.jpg') }}) no-repeat center;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white p-5 rounded-top-md">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                            <h1 class="mb-0">Loans</h1>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="text-md-end mt-3 mt-md-0">
                                <a href="{{ url('register') }}" class="btn btn-primary">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
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

@endsection