<div class="container-fluid" style="background-color: #39BAF0; padding: 5px;">
    <div class="container">
        <a href="#" style="color:white;"><i class="fa fa-envelope"></i> onlinepharmacy@gmail.com &nbsp; </a>
        <a href="#" style="color:white;"><i class="fa fa-phone"></i> 65685854585 </a>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="col-md-4 col-sm-4 col-xs-4" id="logo">
                <a href="{{route('home')}}" class="logo-text">
                    Online<span style="color:#39BAF0; font-size:40px">Pharmacy</span>
                </a>
            </div>
            <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12">
                <div id="top_right">
                    <!-- <div id="cart">
                        <div class="text">
                            <div class="img">
                                <a href="#"> <img class="img-responsive" src="{{asset('assets/images/cart.png')}}" alt="" title="" width="26" height="27" /></a>
                            </div><span>Your cart:</span><span class="cart_total">Rs.00</span><span class="cart_items">(0 items)</span>
                        </div>
                    </div> -->
                    <div id="bottom_right">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 wd_auto">
                                <div class="left">
                                    @if(Auth::guard('customer')->check())
                                    <div class="logout">
                                        <form action="{{route('customer-logout')}}" method="post">
                                            @csrf
                                            <button class="btn btn-default reg_button" type="submit">Logout</button>
                                        </form>
                                    </div>
                                    @else

                                    <div class="login">
                                        <a class="btn btn-default reg_button" href="{{route('customerlogin')}}">Login</a>
                                        <a class="btn btn-default reg_button" href="{{route('customerregister')}}">Signup</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <nav role="navigation" class="navbar navbar-inverse" id="nav_show">
                    <div id="nav" class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"> </span>
                            </button>

                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav site_nav_menu1">
                                <li class="first "><a href="{{route('home')}}">Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav" data-toggle="dropdown">
                                        Category <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item" href="{{route('prescription')}}">Prescription</a></li>
                                        <li><a class="dropdown-item" href="{{route('nonprescription')}}">Non-Prescription</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contactus')}}">Contact Us</a></li>
                                <li><a download href="{{asset('assets/help/helpfile.pdf')}}">Help File</a></li>
                                
                            </ul>
                            <div class="container">
                                <form action="{{route('search')}}" method="get" class="form-inline my-2 my-lg-0" style="margin-top: 8px;     margin-left: 745px;">
                                    {{csrf_field()}}
                                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="contentText">
    <div class="breadcrumbs container-fluid">
        <a href="{{route('home')}}" class="headerNavigation"><i class="fa fa-home"></i></a>
        <a href="{{route('home')}}">Home</a>
    </div>
</div>