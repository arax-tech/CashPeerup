<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{ url('admin/dashboard') }}" class="header-logo">
            <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-danger text-uppercase">Admin</span>
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
                <li class="{{ (strpos(url()->full() , 'admin/dashboard')) ? 'active active-menu' : ''  }}">
                    <a href="{{ url('admin/dashboard') }}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>dashboard</span></a>
                </li>


                <li class="{{ (strpos(url()->full() , 'admin/loan')) ? 'active active-menu' : ''  }}">
                    <a href="{{ url('admin/loan') }}" class="iq-waves-effect"><i class="fa fa-th-large"></i><span>Loan</span></a>
                </li>

               <li class="{{ (strpos(url()->full() , 'admin/loan-application')) ? 'active active-menu' : ''  }}">
                   <a href="{{ url('admin/loan-application') }}" class="iq-waves-effect"><i class="fa fa-gift"></i><span>Loan Application</span></a>
               </li>

               <li class="{{ (strpos(url()->full() , 'admin/withdraw')) ? 'active active-menu' : ''  }}">
                    <a href="{{ url('admin/withdraw') }}" class="iq-waves-effect"><i class="fa fa-usd"></i><span>Withdraw Request</span></a>
                </li>


                <li class="{{ (strpos(url()->full() , 'admin/user')) ? 'active active-menu' : ''  }}">
                    <a href="{{ url('admin/user') }}" class="iq-waves-effect"><i class="fa fa-users"></i><span>Users</span></a>
                </li>

                <li class="{{ (strpos(url()->full() , 'admin/review')) ? 'active active-menu' : ''  }}">
                    <a href="{{ url('admin/review') }}" class="iq-waves-effect"><i class="fa fa-star"></i><span>Reviews</span></a>
                </li>

                
               
            </ul>
        </nav>
        
    </div>
</div>