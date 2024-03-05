<div class="bg-primary py-1">
    <!-- top-bar -->
    <div class="container px-md-0">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-12">
                <div class="fs-6 text-uppercase text-white fw-semi-bold">Welcome to CashPeerup</div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 col-12 text-md-end">
                <div class="fs-6 text-uppercase text-white fw-semi-bold">
                    <span class="ms-2 ms-md-4 ">
                        <a href="#!" class="text-white" >(913) 543-8749</a>
                    </span> 
                    <span class="ms-2 ms-md-4"><a href="#!" class="text-white ">info@cashpeerup.com</a></span></div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg py-3 navbar-default">
    <div class="container px-0">
        <a class="navbar-brand" href="{{ url('home') }}">
            <h1>CashPeerup</h1>
        </a>
        <!-- Button -->
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default"
        aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar mt-0"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('loan') }}">Loan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('faq') }}">Faq</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>


            </ul>
            <div class="ms-lg-3 mt-3 d-grid mt-lg-0">
                @guest
                <a href="{{ url('login') }}" class="btn btn-primary btn-sm">Login</a>
                @else
                <a href="{{ url(strtolower(auth()->user()->role).'/dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                @endguest
            </div>
        </div>
    </div>
</nav>