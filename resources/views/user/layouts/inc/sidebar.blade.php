<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{ url('user/dashboard') }}" class="header-logo">
            <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-danger text-uppercase">User</span>
            </div>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{ (strpos(url()->full() , 'user/dashboard')) ? 'active active-menu' : ''  }}">
                    <a href="{{ url('user/dashboard') }}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>dashboard</span></a>
                </li>


                <li class="{{ (strpos(url()->full() , 'user/apply-loan')) ? 'active active-menu' : ''  }}">
                    <a href="{{ url('user/apply-loan') }}" class="iq-waves-effect"><i class="fa fa-gift"></i><span>Apply Loan</span></a>
                </li>

                <li class="{{ (strpos(url()->full() , 'user/withdraw')) ? 'active active-menu' : ''  }}">
                    <a href="{{ url('user/withdraw') }}" class="iq-waves-effect"><i class="fa fa-usd"></i><span>Withdraw</span></a>
                </li>

               

                
               
            </ul>
        </nav>
        
    </div>
</div>