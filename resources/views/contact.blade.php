@extends('frontend.app')
@section('title', 'Contact')
@section('content')
<div class="py-lg-16 py-10 bg-white border-top">
  <div class="container">
    <div class="row">
      <div class="offset-xl-2 col-xl-8 col-md-12 col-sm-12 col-12">
        <div class="mb-8 text-center">
          <!-- section title-->
          <h1 class="mb-1">We are Here to Help You</h1>
          <p>Nulla rutrum tellus vel mauris tristique gravida in vulputate velit. Nulla dictum porttitor diam, ut molestie lorem mattis.</p>
        </div>
        <!-- /.section title-->
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
        <div class="card mb-3 mb-lg-0 text-center smooth-shadow-sm">
          <div class="card-body p-9 ">
            <div class="mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calendar3 text-primary" viewBox="0 0 16 16">
                  <path
                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                  <path
                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg></div>
            <h4 class="mb-3 text-uppercase fw-semi-bold">Apply For Loan</h4>
            <p class="mb-4">Looking to buy a car or home loan? then apply for loan now.</p>
            <a href="{{ url('register') }}" class="btn-link border-bottom border-primary border-2 fw-bold fs-5">Get Register</a>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
        <div class="card mb-3 mb-lg-0 text-center smooth-shadow-sm">
          <div class="card-body p-9">
            <div class="mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone text-primary" viewBox="0 0 16 16">
                  <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg></div>
            <h4 class="mb-3 text-uppercase fw-semi-bold">Call us at </h4>
            <h1 class="fs-3 mb-0">800-123-456 / 789 </h1>
            <p> <a href="#" class="fs-5">lnfo@loanadvisor.com</a></p>
            <a href="#!" class="btn-link border-bottom border-primary border-2 fw-bold fs-5">Contact
                us</a>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
        <div class="card mb-3 mb-lg-0  text-center smooth-shadow-sm">
          <div class="card-body p-9">
            <div class="mb-6"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people text-primary" viewBox="0 0 16 16">
                  <path
                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                </svg></div>
            <h4 class="mb-3 text-uppercase fw-semi-bold">Talk to Advisor</h4>
            <p class="mb-4">Need to loan advise? Talk to our Loan advisors.</p>
            <a href="#!" class="btn-link border-bottom border-primary border-2 fw-bold fs-5">Meet
                The Advisor</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection