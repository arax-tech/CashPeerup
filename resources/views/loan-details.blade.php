@extends('frontend.app')
@section('title', 'Load Detail')
@section('content')

<div class="pt-18 pb-10" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2)url({{ asset('frontend/images/background/page-header.jpg') }}) no-repeat center;
    background-size: cover;
    }
    ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white p-5 rounded-top-md">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-xl-8 col-sm-12 col-12">
                            <h1 class="mb-0">{{ $loan->loan_title }}   </h1>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                            <div class="text-md-end mt-3 mt-md-0">
                                <a href="{{ url('user/apply-loan') }}" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div>
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mt-n6 bg-white mb-10 rounded-3 shadow-sm position-relative">
                    <div class="section-scroll p-lg-10 p-5" id="section-about">
                        <h2>{{ $loan->loan_title }}</h2>
                        <p class="lead">
                        	{{ $loan->loan_description }}
                        </p>
                        
                        
                        <a href="{{ url('user/apply-loan') }}" class="btn btn-primary">Apply for Loan</a>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </div>

@endsection