
@extends('layouts.front.appFrontSec')



@section('content')

<style type="text/css">
        .hide{display:none;}
        .btn {
        display: inline-block;
        vertical-align: middle;
        cursor: pointer;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        }

    </style>


<div class="container-fluid category_content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active" style="background-color: #696969">My Account
                    </a>
                    <ul class="list-group">

                        <a href="{{asset('customerLogin')}}"><li class="list-group-item" style="color: black;"> Important Details
                        </li></a>
                        <a href="{{asset('personalInformation')}}"><li class="list-group-item">Personal Information
                        </li></a>
                        <a href="{{asset('ratings')}}"><li class="list-group-item" style="color: black;">My Reviews & Ratings
                        </li></a>
                        <a href="{{asset('customerOrders')}}"><li class="list-group-item" style="color: black;">My Orders
                        </li></a><a href="{{asset('showCardInfo')}}"><li class="list-group-item" style="color: black;">Payment
                        </li></a>
                        
                    </ul>
                </div>
               


              
                <!-- /.div -->
               
            </div>
            
            @if(count($info) > 0)
            <!-- /.col -->
            <div class="col-md-9">

            	<div>
                    <div class="section-title">
                    <h2>Personal Information</h2>
        			</div> <!-- /.section -->
                </div>
                
                <div>
                   <strong>Important Information</strong> <br>
                   <p>Hello {{Auth::user()->email }} ,<br>

                    From your Account Section you have the ability to view a snapshot of your recent activity and update your personal information. Click the link below to view or edit information.</p>
                </div>

                <div class="row">
                <div class="col-sm-1 col-md-1">
                    
                </div>
                @foreach($info as $infos)
                <div class="col-sm-8 col-md-8">
                     <div class="contact_form">
                    <form action="{{url('/updateCardInfo')}}" method="post" enctype="multipart/form-data">
                         {{csrf_field()}}
                   
                    <div class="row">
                        
                        <div class="form-group col-md-12">
                        <input type="hidden" name="infoId" value="{{$infos->id}}">
                    </div>
                        

                    <div class="form-group col-md-12">
                        <label>Enter Accont Holder Name</label>
                        <input name="acccount_name" type="text" class="form-control" placeholder="Enter Account Holder Name" value="{{$infos->acccount_name}}">
                    </div>
                
                        <div class="form-group col-md-5 ">
                            <label>Expire Date</label>
                            <input type="text" name="expire_date" class="form-control"  placeholder="YY-MM-DD" value="{{$infos->expire_date}}" >
                        </div>
                    
                    <div class="form-group col-md-3">
                        <label>CVC</label>
                        <input type="Number" name="cvc_number" class="form-control" placeholder="CVC" value="{{$infos->cvc_number}}" >
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" name="card_number" class="form-control" placeholder="Enter Your Card Number" value="{{$infos->card_number}}" >
                    </div>
                    
                    <div class="form-group text-right">
                        <button type="Submit" name="submit" class="btn btn-rounded btn-primary">Change</button>
                    </div>
                <form>
                </div>
                    
                </div>
                <div class="col-sm-2 col-md-2">
                    
                </div>
                </div>
                
 @endforeach()              
                
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
     <!-- /.col -->
@else
            <div class="col-md-9">

                <div>
                    <div class="section-title">
                    <h2>Personal Information</h2>
                    </div> <!-- /.section -->
                </div>
                
                <div>
                   <strong>Important Information</strong> <br>
                   <p>Hello {{Auth::user()->email }} ,<br>

                    From your Account Section you have the ability to view a snapshot of your recent activity and update your personal information. Click the link below to view or edit information.</p>
                </div>

                <div class="row">
                <div class="col-sm-1 col-md-1">
                    
                </div>
                <div class="col-sm-8 col-md-8">
                     <div class="contact_form">
                    <form action="{{url('/saveCardInfo')}}" method="post" enctype="multipart/form-data">
                         {{csrf_field()}}
                   
                    <div class="row">
                    <div class="form-group col-md-12">
                        <label>Enter Accont Holder Name</label>
                        <input name="acccount_name" type="text" class="form-control" placeholder="Enter Account Holder Name" value="">
                    </div>
                
                        <div class="form-group col-md-5 ">
                            <label>Expire Date</label>
                            <input type="text" name="expire_date" class="form-control"  placeholder="YY-MM-DD" >
                        </div>
                    
                    <div class="form-group col-md-3">
                        <label>CVC</label>
                        <input type="Number" name="cvc_number" class="form-control" placeholder="CVC" value="">
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" name="card_number" class="form-control" placeholder="Enter Your Card Number" value="" >
                    </div>
                    
                    <div class="form-group text-right">
                        <button type="Submit" name="submit" class="btn btn-rounded btn-primary">Add Card</button>
                    </div>
                <form>
                </div>
                    
                </div>
                <div class="col-sm-2 col-md-2">
                    
                </div>
                </div>
                
               
                
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endif
 @endsection
