                    <div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('admin')}}" class="simple-text" style="font-size: 30; color: green">
                      ADMIN LOGIN
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ url('admins/category') }}">
                        <i class="fa fa-list-ul" style="font-size: 30; color: red"></i>
                        <p style="font-size: 30; color: green">All Category</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admins/subcategory') }}">
                        <i class="fa fa-list-ul" style="font-size: 30; color: red"></i>
                        <p style="font-size: 30; color: green">All Sub Category</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admins/review') }}">
                        <i class="fa fa-comments" style="font-size: 30; color: red"></i>
                        <p style="font-size: 30; color: green">Product Review</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admins/information')}}">
                        <i class="fa fa-info" style="font-size: 30; color: red"></i>
                        <p style="font-size: 30; color: green">C .Information</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admins/product')}}">
                        <i class="fa fa-product-hunt" style="font-size: 30; color: red"></i>
                        <p style="font-size: 30; color: green">Product Details</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admins/OrderList')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 30; color: red"></i>
                        <p style="font-size: 30; color: green">Order List</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admins/Payment')}}">
                        <i class="fa fa-paypal" style="font-size:30px;color:red"></i>
                        <p style="font-size: 30; color: green">Payment</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admins/User')}}">
                        <i class="fa fa-address-book" style="font-size:30px;color:red"></i>
                        <p style="font-size: 30; color: green">Users</p>
                    </a>
                </li>
                 <li>
                    <a href="{{url('admins/Bookupload')}}">
                        <i class="fa fa-address-book" style="font-size:30px;color:red"></i>
                        <p style="font-size: 30; color: green">Book Detail</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admins/Blog')}}">
                        <i class="fa fa-address-book" style="font-size:30px;color:red"></i>
                        <p style="font-size: 30; color: green">Blog Detail</p>
                    </a>
                </li>
                 <li>
                    <a href="{{url('admins/Slider')}}">
                        <i class="fa fa-image" style="font-size:30px;color:red"></i>
                        <p style="font-size: 30; color: green">Slider</p>
                    </a>
                </li>
                 <li>
                    <a href="{{url('admins/SliderTwo')}}">
                        <i class="fa fa-image" style="font-size:30px;color:red"></i>
                        <p style="font-size: 30; color: green">Slider Second</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admins/Service')}}">
                        <i class="fa fa-address-book" style="font-size:30px;color:red"></i>
                        <p style="font-size: 30; color: green">Service</p>
                    </a>
                </li>
                 <li>
                    <a href="{{url('admins/event')}}">
                        <i class="fa fa-address-book" style="font-size:30px;color:red"></i>
                        <p style="font-size: 30; color: green">Event</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admins/Gallary')}}">
                        <i class="  fa fa-image" style="font-size: 30px; color: red"></i>
                        <p style="font-size: 30; color: green">Gallery</p>
                    </a>
                </li>
                    <li>
                    <a href="{{url('admins/coupne')}}">
                        <i class="  fa fa-image" style="font-size: 30px; color: red"></i>
                        <p style="font-size: 30; color: green">Coupne</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                    </ul>

                </div>
            </div>
        </nav>