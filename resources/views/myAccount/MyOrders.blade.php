

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

                        <a href="{{asset('customerLogin')}}"><li class="list-group-item" style="color: black;"> Important Details
                        </li></a>
                        <a href="{{asset('personalInformation')}}"><li class="list-group-item" style="color: black;">Personal Information
                        </li></a>
                        <a href="{{asset('ratings')}}"><li class="list-group-item" style="color: black;">My Reviews & Ratings
                        </li></a>
                        <a href="{{asset('customerOrders')}}"><li class="list-group-item">My Orders
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
                    <h2>My Orders</h2>
        			</div> <!-- /.section -->
                </div>
                
                

                <div>
                    <table id="example" class="shopping-cart-table table " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                @foreach($orderList as $orderLists)
                                <tbody>
                                    <tr>
                                        <td class="details">
                                            @foreach($orderLists->productList->items as $item)

                                            
                                                {{$item['item']['product_name']}} | {{$item['qty']}} <br>
                                            

                                            @endforeach
                                        </td>
                                        <td><strong>${{$orderLists->totalPrice}}</strong><br><del class="font-weak"><small></small></del></td>
                                        
                                       
                                    </tr>
                                </tbody>
                                @endforeach()
                            </table>
                </div>
                
                
               
                
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


     @endsection

