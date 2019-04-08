x
@extends('layouts.front.appFrontSec')



@section('content')

@if(isset(Auth::user()->email))


<div class="container-fluid category_content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active" style="background-color: #696969">My Account
                    </a>
                    <ul class="list-group">

                        <a href="{{asset('customerLogin')}}"><li class="list-group-item"> Important Details
                        </li></a>
                        <a href="{{asset('personalInformation')}}"><li class="list-group-item" style="color: black;">Personal Information
                        </li></a>
                        <a href="{{asset('ratings')}}"><li class="list-group-item" style="color: black;">My Reviews & Ratings
                        </li></a>
                        <a href="{{asset('customerOrders')}}"><li class="list-group-item" style="color: black;">My Orders
                        </li></a></a>
                        <a href="{{asset('showCardInfo')}}"><li class="list-group-item" style="color: black;">Payment
                        </li></a>
                        
                    </ul>
                </div>
                <!-- /.div -->
               
            </div>
            <!-- /.col -->
            <div class="col-md-9">

            	<div>
                    <div class="section-title">
                    <h2>Important Details</h2>
        			</div> <!-- /.section -->
                </div>
                
                <div>
                   <strong>Important Information</strong> <br>
                   <p>Hello 

                                        
                        <strong>{{Auth::user()->email }}</strong>
                        <br>
                        

                   

                       

                    <br>

                    From your Account Section you have the ability to view a snapshot of your recent activity and update your personal information. Click the link below to view or edit information.</p>
                </div>

                <div>
                    <figure class="snip1519">
                      <figcaption><img src="{{asset('asset/image/black_mail.png')}}">
                        <h3>Email</h3>
                        <p>{{Auth::user()->email }}</p>
                      </figcaption>
                    </figure>
                    <figure class="snip1519">
                      <figcaption><img src="{{asset('asset/image/black_phone.png')}}">
                        <h3>Contact</h3>
                        <p>
                          @foreach($userInfo as $userInfos)

                          {{$userInfos->ContactNumber}}

                          @endforeach

                        </p>
                      </figcaption>
                    </figure>
                    <!-- <figure class="snip1519">
                      <figcaption><img src="{{asset('asset/image/black_lock.png')}}">
                        <h3>Password</h3>
                       
                      </figcaption> -->
                    </figure>
                </div>
                
               
                
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
                         <!-- else
                            <script> window.location="/customerLogin";</script> -->
                        @endif

     @endsection

