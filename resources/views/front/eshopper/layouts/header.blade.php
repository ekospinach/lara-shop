<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="{{asset('front/eshopper/images/home/logo.png')}}" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <!--                        <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                                        USA
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Canada</a></li>
                                                        <li><a href="#">UK</a></li>
                                                    </ul>
                                                </div>
                        
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                                        DOLLAR
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Canadian Dollar</a></li>
                                                        <li><a href="#">Pound</a></li>
                                                    </ul>
                                                </div>-->
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @if (Auth::check())
                            <li><a href="{{url('customer/account')}}"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="{{url('logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                            @else
                            <li><a href="{{url('customer/login')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                            <li><ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> <span class="simpleCart_total"></span> - <span id="simpleCart_quantity" class="simpleCart_quantity"></span> Items<span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-cart" role="menu">
                                            <li>
                                                <span class="simpleCart_items"></span> <br />
                                            </li>
                                            <li><a href="{{url('checkout')}}" class="simpleCart_checkout center-block btn btn-default">Checkout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('')}}" class="active">Home</a></li>

                            @foreach($mtop as $mt)
                            @if(count($mt['children']) > 0)
                            <li class="dropdown"><a href="{{$mt['page_type'] == 'link'? $mt['page_slug'] : url($mt['page_slug'])}}">{{ucwords($mt['page_name'])}}<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($mt['children'] as $child)
                                    <li><a href="{{$child['page_type'] == 'link'? $child['page_slug'] : url($child['page_slug'])}}">{{ucfirst($child['page_name'])}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            <li><a href="{{$mt['page_type'] == 'link'? $mt['page_slug'] : url($mt['page_slug'])}}">{{ucwords($mt['page_name'])}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->