@extends('user.layouts.app')
@section('title', 'User - Dashboard')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row content-body">
            
            <div class="col-lg-12 row m-0 p-0">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="icon iq-icon-box iq-bg-primary rounded" data-wow-delay="0.2s">
                                <i class="fa fa-th-large"></i>
                            </div>
                            <div class="mt-4">
                                <h5 class="text-black text-uppercase">Loan</h5>
                                <h3 class="d-flex text-primary"> {{ $loan }}<i class="ri-arrow-up-line"></i></h3>
                            </div>
                            
                            <div class="mt-3">
                                <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                    <div class="iq-progress-bar">
                                        <span class="bg-primary" data-percent="100"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="icon iq-icon-box iq-bg-primary rounded" data-wow-delay="0.2s">
                                <i class="fa fa-usd"></i>
                            </div>
                            <div class="mt-4">
                                <h5 class="text-black text-uppercase">Withdraw</h5>
                                <h3 class="d-flex text-primary"> {{ $withdraw }}<i class="ri-arrow-up-line"></i></h3>
                            </div>
                            
                            <div class="mt-3">
                                <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                    <div class="iq-progress-bar">
                                        <span class="bg-primary" data-percent="100"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
               
            </div>
           
          



        </div>
    </div>
</div>
@endsection
