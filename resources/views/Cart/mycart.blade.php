
@extends('layouts.front.appFrontSec')



@section('content')
@if(Session::has('cart'))
    <div class="container">
        <section class="m50 row ">
        <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Order Review</h3>
                            </div>
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th></th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-right"></th>
                                    </tr>
                                </thead>
                                <tbody>



                                    @foreach($products as $product)
                                    <?php $url=url('productImage/'.$product['item']['product_image']);  ?>
                                    <form action="{{route('cartUpdate', ['id'=> $product['item']['id']])}}" method="post">
                                        {{csrf_field()}}
                                    <tr>
                                        <td class="thumb"><img style="height:60px;" src="{{$url}}" alt=""></td>
                                        <td class="details">
                                            <a href="#">{{$product['item']['product_name']}}</a>
                                        </td>
                                        <td class="price text-center"><strong>{{$product['item']['product_normal_price']}}</strong><br></td>

                                        <td class=" text-center"><input name="qty" class="qty input" type="number" value="{{$product['qty']}}" onkeypress="return event.charCode >= 48" min="{{$product['item']['product_minimum_sell_number']}}" required></td>
                                        <td class="total text-center"><strong class="primary-color">{{$product['price']}}</strong></td>
                                        <td class="text-right"><a href="{{route('remove',['id'=> $product['item']['id']])}}" class="main-btn icon-btn"><i class="fa fa-trash"></i></a></td>
                                        <td class="text-right"><input type="submit" value="Update"></td>

                                    </tr>
                                </form>
                                   
                                 @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>SUBTOTAL</th>
                                        <th colspan="2" class="sub-total">${{$totalPrice}}.00</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <form action="{{route('applyCoupne')}}" method="post">
                                             
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <th class="empty" colspan="3"></th>
                                        <th>Coupne</th>
                                        <td colspan="2"><input type="text" name="coupne"></td>
                                        <td colspan="2"><?php 
                                        
                                        
                                        ?></td>
                                        <td colspan="2"><button class=" btn btn-primary">Apply</button></td>
                                    </form>
                                    </tr>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>TOTAL</th>
                                        <th colspan="2" class="total">${{$totalPrice}}.00</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div  align="right">
                             <div class="form-group col-sm-6">
                                <a href="{{route('checkout')}}"><img src="{{asset('images\paypal.png')}}" style="height: 50px; width: 200px;"></a>
                                <a href="{{route('checkoutM')}}"><img src="{{asset('images\mastercard.png')}}" style="width: 200px; height: 50px;"></a>
                            </div>
                            
                            </div>
                           <!--  <div align="center">
                                <a href="{{route('checkout')}}"  class="primary-btn btn-primary" type="button" style="margin:  30px;">Checkout</a>
                            </div> -->
                        </div>

                    </div>
    </section>
    </div>
    @else
    <div>
        
        <h1>No Item select</h1>
    </div>
    @endif
@endsection
    
