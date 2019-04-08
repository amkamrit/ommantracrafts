

@extends('layouts.front.appFrontSec')



@section('content')
<div class="container-fluid category_content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active" style="background-color: #696969">My Account
                    </a>
                    <ul class="list-group">

                        <a href="{{asset('customerLogin')}}"  style="color: black;"><li class="list-group-item"> Important Details
                        </li></a>
                        <a href="{{asset('personalInformation')}}"><li class="list-group-item" style="color: black;">Personal Information
                        </li></a>
                        <a href="{{asset('ratings')}}"><li class="list-group-item">My Reviews & Ratings
                        </li></a>
                        <a href="{{asset('customerOrders')}}"><li class="list-group-item" style="color: black;">My Orders
                        </li></a><a href="{{asset('showCardInfo')}}"><li class="list-group-item" style="color: black;">Payment
                        </li></a>
                        
                    </ul>
                </div>
               


              
                <!-- /.div -->
               
            </div>
            <!-- /.col -->
            <div class="col-md-9">

            	<div>
                    <div class="section-title">
                    <h2>My Review & Ratings</h2>
        			</div> <!-- /.section -->
                </div>
                
               

                <div>
                    <div class="review-block">
                      <!-- <div class="row">
                        <div class="col-sm-4">
                          <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                          <div class="review-block-name"><a href="#">Aakash Karkee</a></div>
                          <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                        </div>
                        <div class="col-sm-6">
                          <div class="review-block-rate">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <div class="review-block-title">Product Name</div>
                          <div class="review-block-description">Reviews Here </div>
                        </div>
                        
                      </div>
                      <hr/>  -->
                    </div>
                </div>
                
               
                
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


     @endsection

