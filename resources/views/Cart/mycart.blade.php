
@extends('layouts.front.appFrontSec')



@section('content')
@if(Session::has('cart'))
<div class="alert alert-warning" role="alert">
  </div>

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
                                        <th colspan="2" class="sub-total">${{$totalPrice}}</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        @if(Session::get('coupneAmount'))

                                        <form action="{{route('coupneRemove')}}" method="post">
                                             
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <th class="empty" colspan="3"></th>
                                        <th>Coupne</th>
                                        <td colspan="2">
                                            <input type="hidden" name="delete" value="delete">
                                            ${{Session::get('coupneAmount')}}
                                        </td>
                                        <td colspan="2">

                                            <button type="submit" class=" btn btn-danger btn-sm">Remove</button></td>
                                            
                                    </form>
                                    </tr>
                                    @endif
                                     <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>Tax(13%)</th>
                                        <th colspan="2" class="total">
                                            ${{$totalPrice}}
                                        </th>
                                        <th></th>
                                        <tr>
                                     
                                             
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <th class="empty" colspan="3"></th>
                                        <th>Shipping Address</th>
                                        <td colspan="2">
                                            <input type="text" name="coupne"></td>
                                        <td colspan="2"><button class=" btn btn-primary" data-toggle="modal" data-target="#shipping">Add</button></td>
                                         <!-- Modal -->
                                          <div class="modal fade" id="shipping" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              <!-- Modal content-->
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  
                                                </div>
                                                <div class="modal-body">
                                                  <div class="row">
                                                      <div class="col-sm-6">
        <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text"  name="name" class="form-control" placeholder="Enter Your  Name">
        </div>

        <div class="form-group">
                <label class="control-label">Number</label>
                <input type="text"  name="name" class="form-control" placeholder="Enter Contact Number">
        </div>
                                                      </div>
                                                      <div class="col-sm-6">
        <div class="form-group">
                <label class="control-label">Country:-</label>
                <select name="country" class="form-control">
                    <option disabled>Select Country</option>
                    <option value="NP">Nepal</option>
                    <option value="IN">India</option>
                    <option value="CH">China</option>
                </select>
        </div> 

         <div class="form-group">
                <label class="control-label">Provision:-</label>
                <select name="state" class="form-control">
                    <option disabled>Select Provision</option>
                    <option value="St1">State 1 </option>
                    <option value="St2">State 2 </option>
                    <option value="St3">State 3 </option>
                    <option value="St4">State 4 </option>
                </select>
        </div>  

           <div class="form-group">
                <label class="control-label">City:-</label>
                <select name="city" class="form-control">
                    <option disabled="">Select City</option>
                    <option value="Bi">Biratnager  </option>
                    <option value="Ka">Kathamndu  </option>
                    <option value="Po">Pokahar  </option>
                    <option value="Kh">Khandbari  </option>
                </select>
        </div>     
        <div class="form-group">
                <label class="control-label">Zip</label>
                <input type="text"  name="name" class="form-control" placeholder="Enter Zip code">
        </div>                                              </div>
                                                  </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
                                                </div>
                                              </div>
                                              
                                            </div>
                                          </div>
                                     
                                          <!-- Model End Hear -->
                                    
                                    </tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>TOTAL</th>
                                        <th colspan="2" class="total">
                                            ${{$totalPrice}}
                                        </th>
                                        <th></th>
                                        <tr>
                                        @if(empty(Session::get('coupneAmount')))

                                        <form action="{{route('shopping_cart')}}" method="post">
                                             
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <th class="empty" colspan="3"></th>
                                        <th>Coupne</th>
                                        <td colspan="2">
                                            <input type="text" name="coupne"></td>
                                        <td colspan="2"><button class=" btn btn-primary">Apply</button></td>
                                    </form>
                                    </tr>
                                    @endif
                                    </tr>
                                </tfoot>
                            </table>
                            <div  align="right">
                             <div class="form-group col-sm-6">
                                <a href="{{asset('checkout/'. $totalPrice )}}"><img src="{{asset('images\paypal.png')}}" style="height: 50px; width: 200px;"></a>
                                <a href="{{route('checkoutM')}}"><img src="{{asset('images\mastercard.png')}}" style="width: 200px; height: 50px;"></a>
                            </div>
                            
                            </div>
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
    
